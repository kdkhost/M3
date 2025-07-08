const CACHE_NAME = 'm3-solucoes-v4'; // Versão incrementada
const RUNTIME_CACHE = 'runtime-m3-solucoes';
const OFFLINE_PAGE = '/offline.html';
const API_CACHE_NAME = 'api-cache-v1';

// Lista de assets para pré-cache (atualizada)
const ASSETS_TO_PRECACHE = [
    '/',
    '/index.html',
    '/css/style.min.css',
    '/js/app.min.js',
    '/images/logo/logo.webp',
    '/images/hero-bg.webp',
    '/images/about.webp',
    '/images/service-1.webp',
    '/images/service-2.webp',
    '/images/service-3.webp',
    '/images/testimonial-1.webp',
    '/images/testimonial-2.webp',
    '/images/testimonial-3.webp',
    OFFLINE_PAGE,
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
    'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap'
];

// Tempos de cache (em segundos)
const MAX_AGE = {
    css: 86400 * 7, // 7 dias
    js: 86400 * 7, // 7 dias
    images: 86400 * 30, // 30 dias
    html: 86400 * 1, // 1 dia
    api: 86400 * 0.5      // 12 horas para APIs
};

// Estratégias de Cache
const CACHE_STRATEGIES = {
    STATIC: 'cache-first',
    API: 'network-first',
    PAGES: 'network-first',
    IMAGES: 'cache-first'
};

// ========== INSTALAÇÃO ========== //
self.addEventListener('install', (event) => {
    event.waitUntil(
            (async () => {
                try {
                    const cache = await caches.open(CACHE_NAME);
                    await cache.addAll(ASSETS_TO_PRECACHE);
                    console.log('Cache pré-carregado com sucesso');
                    self.skipWaiting();
                } catch (err) {
                    console.error('Falha na instalação do Service Worker:', err);
                }
            })()
            );
});

// ========== ATIVAÇÃO ========== //
self.addEventListener('activate', (event) => {
    event.waitUntil(
            (async () => {
                // Limpeza de caches antigos
                const cacheNames = await caches.keys();
                await Promise.all(
                        cacheNames.map(cacheName => {
                            if (![CACHE_NAME, RUNTIME_CACHE, API_CACHE_NAME].includes(cacheName)) {
                                console.log('Removendo cache antigo:', cacheName);
                                return caches.delete(cacheName);
                            }
                        })
                        );

                console.log('Service Worker ativado');
                await clients.claim();
            })()
            );
});

// ========== INTERCEPTAÇÃO DE REQUESTS ========== //
self.addEventListener('fetch', (event) => {
    const {request} = event;
    const url = new URL(request.url);

    // Ignora solicitações não-GET ou de origens diferentes
    if (request.method !== 'GET' || !url.origin.includes(location.origin)) {
        return;
    }

    // Direciona para a estratégia apropriada
    if (url.pathname.startsWith('/api/')) {
        return handleApiRequest(event);
    } else if (request.headers.get('accept').includes('text/html')) {
        return handlePageRequest(event);
    } else if (url.pathname.match(/\.(css|js|json|woff2?)$/)) {
        return handleStaticRequest(event);
    } else if (url.pathname.match(/\.(png|jpg|jpeg|gif|webp|svg|ico)$/)) {
        return handleImageRequest(event);
    }

    // Fallback padrão (Network First)
    event.respondWith(networkFirst(request));
});

// ========== ESTRATÉGIAS DE CACHE ========== //

// API Requests (Network First com fallback para cache)
async function handleApiRequest(event) {
    const {request} = event;
    event.respondWith(
            (async () => {
                try {
                    const networkResponse = await fetch(request);

                    // Cache apenas respostas válidas
                    if (networkResponse.ok) {
                        const clone = networkResponse.clone();
                        const cache = await caches.open(API_CACHE_NAME);
                        await cache.put(request, clone);
                    }
                    return networkResponse;
                } catch (err) {
                    const cachedResponse = await caches.match(request);
                    return cachedResponse || new Response(JSON.stringify({error: 'Offline'}), {
                        headers: {'Content-Type': 'application/json'}
                    });
                }
            })()
            );
}

// Páginas HTML (Network First com fallback para cache)
async function handlePageRequest(event) {
    const {request} = event;
    event.respondWith(
            (async () => {
                try {
                    const networkResponse = await fetch(request);

                    // Atualiza o cache
                    const clone = networkResponse.clone();
                    const cache = await caches.open(RUNTIME_CACHE);
                    await cache.put(request, clone);

                    return networkResponse;
                } catch (err) {
                    const cachedResponse = await caches.match(request);
                    return cachedResponse || caches.match(OFFLINE_PAGE);
                }
            })()
            );
}

// Assets estáticos (Cache First com atualização em background)
async function handleStaticRequest(event) {
    const {request} = event;
    event.respondWith(
            (async () => {
                const cachedResponse = await caches.match(request);
                if (cachedResponse) {
                    // Atualiza o cache em background
                    event.waitUntil(
                            fetch(request).then(response => {
                        if (response.ok) {
                            const clone = response.clone();
                            caches.open(RUNTIME_CACHE).then(cache => cache.put(request, clone));
                        }
                    })
                            );
                    return cachedResponse;
                }
                return fetch(request);
            })()
            );
}

// Imagens (Cache First com timeout)
async function handleImageRequest(event) {
    const {request} = event;
    event.respondWith(
            (async () => {
                const cachedResponse = await caches.match(request);
                if (cachedResponse)
                    return cachedResponse;

                try {
                    // Timeout para imagens (5 segundos)
                    const controller = new AbortController();
                    const timeoutId = setTimeout(() => controller.abort(), 5000);

                    const networkResponse = await fetch(request, {signal: controller.signal});
                    clearTimeout(timeoutId);

                    // Cache a resposta
                    const clone = networkResponse.clone();
                    const cache = await caches.open(RUNTIME_CACHE);
                    await cache.put(request, clone);

                    return networkResponse;
                } catch (err) {
                    return new Response('<svg role="img" viewBox="0 0 100 100"></svg>', {
                        headers: {'Content-Type': 'image/svg+xml'}
                    });
                }
            })()
            );
}

// ========== FUNÇÕES UTILITÁRIAS ========== //

async function networkFirst(request) {
    try {
        return await fetch(request);
    } catch (err) {
        return await caches.match(request);
    }
}

// ========== ATUALIZAÇÕES EM SEGUNDO PLANO ========== //
self.addEventListener('message', (event) => {
    if (event.data?.type === 'SKIP_WAITING') {
        self.skipWaiting();
    }
});

// ========== SINCRONIZAÇÃO PERIÓDICA ========== //
self.addEventListener('periodicsync', (event) => {
    if (event.tag === 'clean-cache') {
        event.waitUntil(cleanOldCaches());
    }
});

async function cleanOldCaches() {
    const cacheNames = await caches.keys();
    const currentCaches = [CACHE_NAME, RUNTIME_CACHE, API_CACHE_NAME];

    await Promise.all(
            cacheNames.map(cacheName => {
                if (!currentCaches.includes(cacheName)) {
                    console.log('Removendo cache antigo:', cacheName);
                    return caches.delete(cacheName);
                }
            })
            );
}
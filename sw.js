const CACHE_NAME = 'm3-solucoes-v3'; // Incrementado para v3
const RUNTIME_CACHE = 'runtime-m3-solucoes';
const OFFLINE_PAGE = '/offline.html';
const ASSETS_TO_PRECACHE = [
    '/',
    '/index.html',
    '/css/style.min.css',
    '/js/app.min.js',
    '/images/logo.webp',
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

// Tempo máximo de cache para diferentes tipos de arquivo (em segundos)
const MAX_AGE = {
    css: 86400 * 7, // 7 dias
    js: 86400 * 7, // 7 dias
    images: 86400 * 30, // 30 dias
    html: 86400 * 1       // 1 dia
};

self.addEventListener('install', (event) => {
    event.waitUntil(
            caches.open(CACHE_NAME)
            .then((cache) => {
                console.log('Cache aberto');
                return cache.addAll(ASSETS_TO_PRECACHE);
            })
            .then(() => self.skipWaiting())
            .catch(err => {
                console.error('Falha na instalação do Service Worker:', err);
            })
            );
});

self.addEventListener('activate', (event) => {
    event.waitUntil(
            caches.keys().then((cacheNames) => {
        return Promise.all(
                cacheNames.map((cache) => {
                    if (cache !== CACHE_NAME && cache !== RUNTIME_CACHE) {
                        console.log('Removendo cache antigo:', cache);
                        return caches.delete(cache);
                    }
                })
                );
    })
            .then(() => {
                console.log('Service Worker ativado');
                return clients.claim();
            })
            );
});

self.addEventListener('fetch', (event) => {
    // Ignora solicitações que não são GET ou de origem diferente
    if (event.request.method !== 'GET' || !event.request.url.startsWith(self.location.origin)) {
        return;
    }

    // Tratamento especial para solicitações da API
    if (event.request.url.includes('/api/')) {
        event.respondWith(
                fetch(event.request)
                .then(response => {
                    // Cache apenas para respostas válidas da API
                    if (response.ok) {
                        const clonedResponse = response.clone();
                        caches.open(RUNTIME_CACHE).then(cache => {
                            cache.put(event.request, clonedResponse);
                        });
                    }
                    return response;
                })
                .catch(() => {
                    // Fallback para dados em cache quando offline
                    return caches.match(event.request);
                })
                );
        return;
    }

    // Estratégia Cache First com atualização em background para assets estáticos
    if (event.request.url.match(/\.(css|js|png|jpg|jpeg|gif|webp|svg|ico|woff2?)$/)) {
        event.respondWith(
                caches.match(event.request).then(cachedResponse => {
            const fetchedResponse = fetch(event.request).then(response => {
                // Atualiza o cache com a nova versão
                const responseToCache = response.clone();
                caches.open(RUNTIME_CACHE).then(cache => {
                    cache.put(event.request, responseToCache);
                });
                return response;
            }).catch(() => {
            });

            // Retorna a resposta em cache imediatamente enquanto busca a atualização
            return cachedResponse || fetchedResponse;
        })
                );
        return;
    }

    // Estratégia Network First para páginas HTML
    event.respondWith(
            fetch(event.request)
            .then(response => {
                // Verifica se a resposta é válida
                if (!response || response.status !== 200 || response.type !== 'basic') {
                    return response;
                }

                // Clona a resposta para armazenar no cache
                const responseToCache = response.clone();
                caches.open(RUNTIME_CACHE)
                        .then(cache => cache.put(event.request, responseToCache));

                return response;
            })
            .catch(() => {
                // Fallback para página offline quando não há conexão
                return caches.match(event.request)
                        .then(cachedResponse => cachedResponse || caches.match(OFFLINE_PAGE));
            })
            );
});

// Atualização em segundo plano
self.addEventListener('message', (event) => {
    if (event.data && event.data.type === 'SKIP_WAITING') {
        self.skipWaiting();
    }
});

// Limpeza periódica do cache
const cleanOldCaches = async () => {
    const cacheNames = await caches.keys();
    const currentCaches = [CACHE_NAME, RUNTIME_CACHE];

    return Promise.all(
            cacheNames.map(cacheName => {
                if (!currentCaches.includes(cacheName)) {
                    console.log('Removendo cache antigo:', cacheName);
                    return caches.delete(cacheName);
                }
            })
            );
};

// Executa a limpeza periodicamente
self.addEventListener('periodicsync', (event) => {
    if (event.tag === 'clean-cache') {
        event.waitUntil(cleanOldCaches());
    }
});
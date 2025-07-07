const CACHE_NAME = 'm3-solucoes-v2'; // Incrementar versão ao atualizar
const ASSETS_TO_CACHE = [
  '/',
  '/index.html',
  '/css/style.css',
  '/js/app.js',
  '/images/logo.png',
  '/images/hero-bg.jpg',
  '/images/about.jpg',
  '/images/service-1.jpg',
  '/images/service-2.jpg',
  '/images/service-3.jpg',
  '/images/testimonial-1.jpg',
  '/images/testimonial-2.jpg',
  '/images/testimonial-3.jpg',
  '/offline.html', // Página offline personalizada
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
  'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap'
];

// Estratégia de Cache: Stale-While-Revalidate para recursos estáticos
const STATIC_CACHE_FIRST = [
  '/css/style.css',
  '/js/app.js',
  /\.(?:png|jpg|jpeg|svg|gif)$/
];

// Estratégia de Cache: Network First para páginas HTML
const NETWORK_FIRST = [
  '/',
  '/index.html'
];

self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then((cache) => {
        return cache.addAll(ASSETS_TO_CACHE)
          .catch(err => {
            console.log('Falha ao adicionar ao cache:', err);
          });
      })
  );
  self.skipWaiting(); // Força a ativação imediata do novo service worker
});

self.addEventListener('activate', (event) => {
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cache) => {
          if (cache !== CACHE_NAME) {
            console.log('Removendo cache antigo:', cache);
            return caches.delete(cache);
          }
        })
      );
    })
  );
  event.waitUntil(clients.claim()); // Toma controle imediato de todas as páginas
});

self.addEventListener('fetch', (event) => {
  const request = event.request;
  
  // Ignora solicitações que não são GET ou de origem diferente
  if (request.method !== 'GET' || !request.url.startsWith('http')) {
    return;
  }

  // Verifica se a URL corresponde a algum padrão de cache estático
  const isStaticAsset = STATIC_CACHE_FIRST.some(pattern => {
    if (typeof pattern === 'string') {
      return request.url.includes(pattern);
    } else if (pattern instanceof RegExp) {
      return pattern.test(request.url);
    }
    return false;
  });

  // Verifica se é uma solicitação de página
  const isPageRequest = NETWORK_FIRST.includes(request.url) || 
                        request.headers.get('accept').includes('text/html');

  if (isStaticAsset) {
    // Estratégia Cache First para recursos estáticos
    event.respondWith(
      caches.match(request).then(cachedResponse => {
        // Retorna do cache se existir, senão busca na rede
        return cachedResponse || fetch(request).then(response => {
          // Se for uma resposta válida, adiciona ao cache
          if (response && response.status === 200) {
            const responseToCache = response.clone();
            caches.open(CACHE_NAME).then(cache => {
              cache.put(request, responseToCache);
            });
          }
          return response;
        });
      })
    );
  } else if (isPageRequest) {
    // Estratégia Network First para páginas HTML
    event.respondWith(
      fetch(request).then(networkResponse => {
        // Atualiza o cache com a nova resposta
        const responseToCache = networkResponse.clone();
        caches.open(CACHE_NAME).then(cache => {
          cache.put(request, responseToCache);
        });
        return networkResponse;
      }).catch(() => {
        // Retorna do cache ou página offline se a rede falhar
        return caches.match(request).then(cachedResponse => {
          return cachedResponse || caches.match('/offline.html');
        });
      })
    );
  } else {
    // Para outras requisições, usa Network First com fallback para cache
    event.respondWith(
      fetch(request).then(networkResponse => {
        return networkResponse;
      }).catch(() => {
        return caches.match(request);
      })
    );
  }
});

// Atualização em segundo plano
self.addEventListener('message', (event) => {
  if (event.data.action === 'skipWaiting') {
    self.skipWaiting();
  }
});
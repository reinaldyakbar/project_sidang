const CACHE_NAME = 'my-pwa-cache-v1';
const urlsToCache = [
  '/',
  '/assets/front-end/assets/css/bootstrap.min.css',
  '/assets/front-end/assets/style/style.css',
  '/assets/front-end/assets/style/responsive.css',
  '/assets/front-end/assets/style/lightbox.css',
  // Tambahkan semua aset yang ingin Anda cache di sini
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        console.log('Service worker: Cache opened successfully');
        return cache.addAll(urlsToCache)
          .catch(error => {
            console.error('Service worker: Failed to cache some assets:', error);
          });
      })
      .catch(error => {
        console.error('Service worker: Cache open failed:', error);
      })
  );
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        if (response) {
          console.log('Service worker: Found in cache', event.request.url);
          return response;
        }

        console.log('Service worker: Fetching from server', event.request.url);
        return fetch(event.request);
      })
      .catch(error => {
        console.error('Service worker: Fetch error:', error);
      })
  );
});

self.addEventListener('activate', event => {
  const cacheWhitelist = [CACHE_NAME];

  event.waitUntil(
    caches.keys()
      .then(cacheNames => {
        return Promise.all(
          cacheNames.map(cacheName => {
            if (!cacheWhitelist.includes(cacheName)) {
              return caches.delete(cacheName);
            }
          })
        );
      })
      .catch(error => {
        console.error('Service worker: Cache deletion failed:', error);
      })
  );
});

self.addEventListener('push', event => {
  console.log('Service worker: Push received.');
  const title = 'Notifikasi PWA';
  const options = {
    body: 'Ini adalah contoh notifikasi push pada PWA.',
    icon: '/project_sidang/assets/img/notif.png', // Ganti dengan URL icon notifikasi Anda
    badge: '/project_sidang/assets/img/badge.png', // Ganti dengan URL badge notifikasi Anda
  };

  event.waitUntil(
    self.registration.showNotification(title, options)
  );
});

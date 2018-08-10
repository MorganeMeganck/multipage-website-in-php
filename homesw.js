// // Listen for install event, set callback
// self.addEventListener('install', function(event) {
//     // Perform some task
// });
// self.addEventListener('activate', function(event) {
//   // Perform some task
// });
// var filesToCache = [
//  '/',
//  'home.php',
//  'assets/css/style.css',
//  'assets/css/bootstrap.min.css',
//  'assets/js/main.js',
//  './manifest.json'
// ]
//
// var cacheName = 'pwa'; //le nom de mon cache !
//
// // J'assigne un écouteur 'install' à mon service worker
// self.addEventListener('install', function(e){
//   // Cool il est installé !
//   console.log('[ServiceWorker] Install');
//   e.waitUntil(
//     // Je récupére mon cache du nom de pwa
//     caches.open(cacheName).then(function(cache) {
//       // Je fais là mise en cache de ma PWA
//       console.log('[ServiceWorker] Caching app shell');
//       return cache.addAll(filesToCache);
//       // filesToCache : tableaux contenant les différents path vers les fichiers que je veux stocker.
//     })
//   );
// });
// // J'assigne un écouteur 'fetch' à mon service worker
// self.addEventListener('fetch', function(e) {
//   // J'intercepte bien une requéte x ou y.
//   console.log('[ServiceWorker] Fetch', e.request.url);
//   e.respondWith(
//     // Jy réponds soit avec une ressource trouvé dans mon cache (responde) soit en renvoyant la requête
//     caches.match(e.request).then(function(response) {
//       return response || fetch(e.request);
//     })
//   );
// });

self.addEventListener('install', function(event) {
    console.log("Installed");
});

importScripts('/cache-polyfill.js');


self.addEventListener('install', function(e) {
 e.waitUntil(
   caches.open('airhorner').then(function(cache) {
     return cache.addAll([
       '/',
       '/dummy.html',
       '/fooditem.css',
       '/receipe.html',
       '/index.css',
     ]);
   })
 );
});


self.addEventListener('activate', function(event) {
   console.log("Activated");
});

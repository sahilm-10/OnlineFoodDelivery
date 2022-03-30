self.addEventListener('install', function(event) {
    console.log("Installed");
});

importScripts('/cache-polyfill.js');

self.addEventListener('activate', function(event) {
   console.log("Activated");
});

self.addEventListener("fetch", event => {
    console.log("You fetched " + event.url);
});

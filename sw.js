self.addEventListener("fetch", event => {
    console.log("You fetched " + event.url);
});

const ASSETS = [
    "/style.css",
    "/index.css",
    "/index.html",
    "/dummy.html",
    "/"
];


let cache_name = "SimiCart"; // The string used to identify our cache

self.addEventListener("install", event => {
    console.log("installing...");
    event.waitUntil(
        caches
            .open(cache_name)
            .then(cache => {
                return cache.addAll(ASSETS);
            })
            .catch(err => console.log(err))
    );
});

self.addEventListener("fetch", event => {
    if (event.request.url === "https://onlinefooddeliverynew.herokuapp.com/homepage.php") {
        // or whatever your app's URL is
        event.respondWith(
            fetch(event.request).catch(err =>
                self.cache.open(cache_name).then(cache => cache.match("/offline.html"))
            )
        );
    } else {
        event.respondWith(
            fetch(event.request).catch(err =>
                caches.match(event.request).then(response => response)
            )
        );
    }
});


// self.addEventListener('install', function(event) {
//     console.log("Installed");
// });

// importScripts('/cache-polyfill.js');

// self.addEventListener('activate', function(event) {
//    console.log("Activated");
// });

// self.addEventListener("fetch", event => {
//     console.log("You fetched " + event.url);
// });

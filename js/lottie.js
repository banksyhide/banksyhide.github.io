
var loader = bodymovin.loadAnimation({
    container: document.getElementById('loader'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'preloader.json'
});


var emoji = bodymovin.loadAnimation({
    container: document.getElementById('emoji'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'wow.json'
});
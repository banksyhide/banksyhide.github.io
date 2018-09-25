/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
/* google map*/
/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
function initialize() {
    var map_canvas = document.getElementById('googleMap');

    var map_options = {
        center: new google.maps.LatLng(43.652201, -79.386641),
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        draggable: false
    };
    
    var image = 'img/marker.png';
    var map = new google.maps.Map(map_canvas, map_options);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(43.652201, -79.386641),
        map: map,
        icon: image,
        title: ''
    });
    var styles = [
        {
            "featureType": "landscape",
            "stylers": [
                { "visibility": "on" },
                { "color": "#f1f1f1" }
            ]
        },{
            "featureType": "poi",
            "stylers": [
                { "visibility": "on" }
            ]
        },{
            "featureType": "road",
            "stylers": [
                { "color": "#ffffff" }
            ]
        },{
            "featureType": "road.arterial",
            "stylers": [
                { "color": "#ffffff" },
                { "visibility": "on" }
            ]
        },{
            "featureType": "road",
            elementType: "geometry.stroke",
            "stylers": [
                { "color": "#c9c9c9" }
            ]
        },{
            "elementType": "geometry.stroke",
            "stylers": [
                { "visibility": "on" }
            ]
        },{
            "featureType": "road",
            "elementType": "labels.text.fill",
            "stylers": [
                { "visibility": "on" },
                { "color": "#000000"}
            ]
        },{
            "featureType": "road",
            "elementType": "labels.text.stroke",
            "stylers": [
                { "visibility": "on" },
                { "color": "#ffffff"}
            ]
        },{
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
                { "visibility": "on" },
                { "weight": 8 },
                { "hue": "#ff0000" },
                { "color": "#000000" }
            ]
        },{
            "featureType": "landscape",
            "elementType": "labels.text.stroke",
            "stylers": [
                { "color": "#c9c9c9" },
                { "visibility": "off" }
            ]
        },{
            "featureType": "poi",
            "elementType": "labels.icon",
            "stylers": [
                { "visibility": "on" }
            ]
        },{
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
                { "visibility": "on" },
                { "color": "#ffffff" }
            ]
        },{
            "featureType": "water",
            "elementType": "labels.text.stroke",
            "stylers": [
                { "visibility": "on" },
                { "color": "#000" }
            ]
        },{
            "featureType": "water",
            "stylers": [
                { "color": "#afe7ff" }
            ]
        },{
        }
    ]
    map.setOptions({styles: styles});
}
google.maps.event.addDomListener(window, 'load', initialize);


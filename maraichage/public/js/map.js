function initMap() {
    console.log('initMap ok');

    var myLatLng = { lat: 43.333316, lng: 0.849494 };

    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        scrollwheel: false,
        zoom: 10,
        maxZoom: 12,
        minZoom: 9
    });

    // Create a marker and set its position.
    var marker = new google.maps.Marker({
        map: map,
        position: myLatLng,
        title: 'Hello World!'
    });
}
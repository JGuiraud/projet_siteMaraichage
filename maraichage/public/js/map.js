function initMap() {
    console.log('initMap ok');

    // geocoding principal garden
    var myLatLng = { lat: 43.3145278, lng: 0.8568888 };

    // create a map object and specify the DOM element for display center on principal garden
    var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        scrollwheel: false,
        zoom: 10,
        maxZoom: 12,
        minZoom: 9
    });

    // create a marker principal garden and set its position
    var marker = new google.maps.Marker({
        map: map,
        position: myLatLng,
        title: 'Hello World!'
    });

    // load all markets points register
    var latitude = [];
    var longitude = [];

    $('.market_latitude').each(function(i) {
        latitude.push(($(this).text()));
    });

    $('.market_longitude').each(function(i) {
        longitude.push(($(this).text()));
    });

    // create all markets markers
    $(latitude).each(function(i) {
        var markets_LatLng = { lat: parseFloat(latitude[i]), lng: parseFloat(longitude[i]) }
        new google.maps.Marker({
            map: map,
            position: markets_LatLng,
            title: 'Hello World!'
        });
    });





}
function initMap() {
    console.log('initMap ok');

    // load all markets city register
    var id = [];
    $('.market_id').each(function(i) {
        id.push(($(this).text()));
    });
    var city = [];
    $('.market_city').each(function(i) {
        city.push(($(this).text()));
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

    // load all markets details register
    var details = [];
    $('.market_details').each(function(i) {
        details.push(($(this).text()));
    });

    // geocoding principal garden
    var myLatLng = { lat: parseFloat(latitude[0]), lng: parseFloat(longitude[0]) };

    // create a map object and specify the DOM element for display center on principal garden
    var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        scrollwheel: false,
        zoom: 10,
        maxZoom: 12,
        minZoom: 9
    });

    // create all markets markers
    $(id).each(function(i) {
        var markets_LatLng = { lat: parseFloat(latitude[i]), lng: parseFloat(longitude[i]) }
        if (id[i] != 1) {
            var markers_markets = new google.maps.Marker({
                map: map,
                position: markets_LatLng,
                animation: google.maps.Animation.DROP,
                title: city[i]
            });
            var markets_details = new google.maps.InfoWindow({
                content: '<h4>Marché de: ' +
                    city[i] +
                    '</h4><hr>' +
                    '<h5>' +
                    details[i] +
                    '</h5>',
                maxWidth: 200
            });
        } else {
            var markers_markets = new google.maps.Marker({
                map: map,
                position: markets_LatLng,
                animation: google.maps.Animation.DROP,
                title: city[i],
                icon: "http://maps.google.com/mapfiles/marker_green.png"
            });
            var markets_details = new google.maps.InfoWindow({
                content: '<h4>' +
                    city[i] +
                    '</h4><hr>' +
                    '<h5>' +
                    details[i] +
                    '</h5>',
                maxWidth: 200
            });
        }
        markers_markets.addListener('click', function() {
            markets_details.close();
            markets_details.open(map, markers_markets);
        });
    });





}

$('#addcity').on('click', function () {
    $('#form').submit();
})


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

    // load all markets details register
    var details = [];
    $('.market_details').each(function(i) {
        details.push(($(this).text()));
    });

    // load all markets city register
    var city = [];
    $('.market_city2').each(function(i) {
        city.push(($(this).text()));
    });

    // create a marker principal garden and set its position
    var marker = new google.maps.Marker({
        map: map,
        position: myLatLng,
        title: 'Vente à l\'exploitation tous les mercredis de 17h à 19h'
    });

    var garden_details = new google.maps.InfoWindow({
        content: '<h4>Vente à l\'exploitation</h4><hr>' +
            '<h5>Tous les mercredis de 17h à 19h</h5>',
        maxWidth: 200
    });

    marker.addListener('click', function() {
        garden_details.open(map, marker);
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
        var markers_markets = new google.maps.Marker({
            map: map,
            position: markets_LatLng,
            title: details[i]
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
        markers_markets.addListener('click', function() {
            markets_details.open(map, markers_markets);
        });

    });






}
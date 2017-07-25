var autocomplete;

function initAutocomplete() {
    console.log('initAutocomplete ok');
    var options = {
        types: ['(regions)'],
        componentRestrictions: { country: "fr" }
    };
    var input = document.getElementById('city');
    var autocomplete = new google.maps.places.Autocomplete(input, options);
    initMap();
}

function initMap() {
    console.log('initMap ok');

    // var map = new L.Map('map', { fullscreenControl: false });
    // var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    // var osmAttrib = 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors, Imagery © CloudMade';
    // var osm = new L.TileLayer(osmUrl, { minZoom: 10, maxZoom: 19, attribution: osmAttrib });
    // map.setView(new L.LatLng(43.333316, 0.849494), 16);
    // map.addLayer(osm);
    // map.scrollWheelZoom.disable();


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

$('.btn').prop('disabled', true);
$('body').mousemove(function() {
    var city = $('#city').val();
    var details = $('#details').val();
    if (city != '' && details != '') {
        $('.btn').prop('disabled', false);
    } else {
        $('.btn').prop('disabled', true);
    }
});


$('#details').focusin(function() {
    var city = $('#city').val().split(' ')[0].replace(',', '');
    if (city !== '') {
        $("#city_bdd").val(city).html();

        $.ajax({
            type: "GET",
            url: "https://maps.googleapis.com/maps/api/geocode/json?address=" + city + "&lang=fr&key=AIzaSyD7EtFbAhBZWZMCI_9OaOpLNPkjVRcKlGU",
            dataType: "json",
            success: geolocation,
            error: function() {
                alert("404 Not Found - Oops something went wrong !");
            }
        });
    }
});

function geolocation(data) {
    var latitude = data.results[0].geometry.location.lat;
    var longitude = data.results[0].geometry.location.lng;
    $("#latitude").val(latitude).html();
    $("#longitude").val(longitude).html();
}
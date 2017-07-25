console.log('start map');

// var map = new L.Map('map', { fullscreenControl: false });
// var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
// var osmAttrib = 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors, Imagery © CloudMade';

// var osm = new L.TileLayer(osmUrl, { minZoom: 10, maxZoom: 19, attribution: osmAttrib });

// map.setView(new L.LatLng(43.333316, 0.849494), 16);
// map.addLayer(osm);
// map.scrollWheelZoom.disable();

var autocomplete;

function initAutocomplete() {
    var options = {
        types: ['(cities)'],
        componentRestrictions: { country: "fr" }
    };
    var input = document.getElementById('city');
    var autocomplete = new google.maps.places.Autocomplete(input, options);
}

$('#details').focusin(function() {
    var city = $('#city').val().split(' ')[0].replace(',', '');
    $("#city").val(city).html();

    $.ajax({
        type: "GET",
        url: "https://maps.googleapis.com/maps/api/geocode/json?address=" + city + "&lang=fr&key=AIzaSyD7EtFbAhBZWZMCI_9OaOpLNPkjVRcKlGU",
        dataType: "json",
        success: geolocation,
        error: function() {
            alert("404 Not Found - Oops something went wrong !");
        }
    });
});

function geolocation(data) {
    var latitude = data.results[0].geometry.location.lat;
    var longitude = data.results[0].geometry.location.lng;
    $("#latitude").val(latitude).html();
    $("#longitude").val(longitude).html();
}
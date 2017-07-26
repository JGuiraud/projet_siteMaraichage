var autocomplete;

function initAutocomplete() {
    console.log('initAutocomplete ok');
    var options = {
        types: ['(regions)'],
        componentRestrictions: { country: "fr" }
    };
    var input = document.getElementById('city');
    var autocomplete = new google.maps.places.Autocomplete(input, options);
    initMap(); //map.js
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
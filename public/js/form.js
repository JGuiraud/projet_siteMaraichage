// autocompletion
var autocomplete;

function initAutocomplete() {
    var options = {
        types: ['(regions)'],
        componentRestrictions: { country: "fr" }
    };
    var input = document.getElementById('city');
    var autocomplete = new google.maps.places.Autocomplete(input, options);
    initMap(); //map.js
}

// condition enable submit button
$('.btn').prop('disabled', true);
$('body').keyup(function() {
    var city = $('#city').val();
    var details = $('#details').val();
    if (city != '' && details != '') {
        $('.btn').prop('disabled', false);
    } else {
        $('.btn').prop('disabled', true);
    }
});

$('#addcity').on('click', function() {
    $('#form').submit();
})

// condition control existing market
$('body').click(function() {
    $('.market_city').each(function() {
        if ($(this).text() == $('#city_bdd').val()) {
            alert('Ce marché existe déjà dans la liste ');
            $("#city_bdd").val(' ').html();
            $("#city").val('').html();

        };
    });
});

// find only city string and call api geocode
$('#details').focusin(function() {
    var city = $('#city').val().replace(/\d+/g, '').replace(' ', '').split(',')[0].replace(',', '');
    if (city.includes(' ')) {
        city = city.split(' ')[0];
    }
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

// find city latitude and longitude
function geolocation(data) {
    var latitude = data.results[0].geometry.location.lat;
    var longitude = data.results[0].geometry.location.lng;
    $("#latitude").val(latitude).html();
    $("#longitude").val(longitude).html();
}
$(document).ready(function () {

    var id = [];
    $('.market_id').each(function (i) {
        id.push(($(this).text()));
    });
    var city = [];
    $('.market_city').each(function (i) {
        city.push(($(this).text()));
    });

    // load all markets points register
    var latitude = [];
    var longitude = [];
    $('.market_latitude').each(function (i) {
        latitude.push(($(this).text()));
    });
    $('.market_longitude').each(function (i) {
        longitude.push(($(this).text()));
    });

    // load all markets details register
    var details = [];
    $('.market_details').each(function (i) {
        details.push(($(this).text()));
    });

    $.ajax({
        type: "GET",
        url: "https://maps.googleapis.com/maps/api/geocode/json?address=" + city + "&lang=fr&key=AIzaSyD7EtFbAhBZWZMCI_9OaOpLNPkjVRcKlGU",
        dataType: "json",
        success: geolocation,
        error: function () {
            alert("404 Not Found - Oops something went wrong !");
        }
    });

    var map, myLatLng, markers_markets;
    var winWidth = $(window).width();
    var winHeight = $(window).height();

    // map center screen width
    if (winWidth > winHeight) {
        winWidth = winHeight;
    }

    if (winWidth <= 414) {
        myLatLng = {
            lat: parseFloat(latitude[0]),
            lng: parseFloat(longitude[0])
        };
    } else if (winWidth > 414 && winWidth <= 768) {
        myLatLng = {
            lat: parseFloat(latitude[0]),
            lng: parseFloat(longitude[0]) - 0.5
        };
    } else if (winWidth > 768 && winWidth <= 1366) {
        myLatLng = {
            lat: parseFloat(latitude[0]),
            lng: parseFloat(longitude[0]) - 0.7
        };
    } else if (winWidth > 1366) {
        myLatLng = {
            lat: parseFloat(latitude[0]),
            lng: parseFloat(longitude[0]) - 1
        };
    }

    function geolocation() {
        // create a map object and specify the DOM element for display center on principal garden
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            scrollwheel: false,
            zoom: 9,
            maxZoom: 12,
            minZoom: 9
        });

        // create all markets markers and details with infowindow
        $(id).each(function (i) {
            var markets_LatLng = {
                lat: parseFloat(latitude[i]),
                lng: parseFloat(longitude[i])
            }
            if (this[i] != 1) {
                markers_markets = new google.maps.Marker({
                    map: map,
                    position: markets_LatLng,
                    animation: google.maps.Animation.DROP,
                    title: city[i],
                    icon: "http://maps.google.com/mapfiles/marker.png"
                });
                var markets_details = new google.maps.InfoWindow({
                    content: '<h5>Marché de: ' +
                        city[i] +
                        '</h5><hr>' +
                        '<p>' +
                        details[i] +
                        '</p>',
                    maxWidth: 300
                });
            } else {
                markers_markets = new google.maps.Marker({
                    map: map,
                    position: markets_LatLng,
                    animation: google.maps.Animation.DROP,
                    title: city[i],
                    icon: "http://maps.google.com/mapfiles/marker_green.png"
                });
                var markets_details = new google.maps.InfoWindow({
                    content: '<h5>' +
                        city[i] +
                        '</h5><hr>' +
                        '<p>' +
                        details[i] +
                        '</p>',
                    maxWidth: 300
                });
            }
            markers_markets.addListener('click', function () {
                if (typeof (window.infoopened) != 'undefined') {
                    infoopened.close();
                }
                markets_details.open(map, this);
                infoopened = markets_details;
            });
            map.addListener('click', function () {
                if (typeof (window.infoopened) != 'undefined') {
                    infoopened.close();
                }
            });
        });

        // resize map screen
        setInterval(function () {
            google.maps.event.trigger(map, "resize");
        }, 1000);
    }
});
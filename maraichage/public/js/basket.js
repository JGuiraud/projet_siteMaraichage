$(document).ready(function() {

    $('.fa-trash').on('click', function() {
        localStorage.clear();
        location.reload();
    });



    $('#validateBasket').on('click', function(e) {
        e.preventDefault();
        $('#formBasket').submit();

    });

    function displayBasket(tab) {
        $('#basketReceiver').html('');
        tab.forEach(function(a) {
            $('#basketReceiver').append('<span id="' + a + '"><span class="removefromBasket fa fa-times"> </span> ' + a + '</span><span>, ');
        });
        $('.removefromBasket').each(function() {
            $(this).on('click', function() {
                var name = $(this).parent().attr('id');
                if (vegiesTabl.includes(name)) {
                    vegiesTabl.splice(vegiesTabl.indexOf(name), 1);
                }
                localStorage.setItem('vegiesTabl', JSON.stringify(vegiesTabl));
                displayBasket(vegiesTabl);
                checkLight();
                hiddenInputRefresh();
            });
        });
    }
    var vegiesTabl = [];
    if (localStorage.getItem('vegiesTabl')) {
        vegiesTabl = JSON.parse(localStorage.getItem('vegiesTabl'));
        displayBasket(vegiesTabl);
    } else {
        vegiesTabl = [];
        localStorage.setItem('vegiesTabl', JSON.stringify(vegiesTabl));
    }
    var y = 0;

    function hiddenInputRefresh() {
        $('#inputReceiver').html('');
        for (y = 0; y < vegiesTabl.length; y++) {
            $('#inputReceiver').append('<input name="vegies[' + y + ']" value="' + vegiesTabl[y] + '" hidden />');
        }
    }
    hiddenInputRefresh()
    $('.vegie').on('click', function() {
        var name = $(this).attr('name');
        if (vegiesTabl.includes(name)) {
            vegiesTabl.splice(vegiesTabl.indexOf(name), 1);
        } else {
            vegiesTabl.push(name);
        }
        $('#basketReceiver').html('');
        displayBasket(vegiesTabl);
        localStorage.setItem('vegiesTabl', JSON.stringify(vegiesTabl));
        checkLight();
        hiddenInputRefresh();
    });

    function checkLight() {
        $('.vegie').each(function() {
            if (vegiesTabl.includes($(this).attr('name'))) {
                $(this).attr('class', 'vegie btn btn-success');
            } else {
                $(this).attr('class', 'vegie btn btn-secondary');
            }
        });
    }
    checkLight();

    function checkedSeasons() {
        var checked_seasons = [];
        $('.checkbox-inline').each(function() {
            if ($(this).children().is(':checked')) {
                checked_seasons.push('1');
            } else {
                checked_seasons.push('0');
            }
        });
        return checked_seasons;
    }

    function MEGAFILTER() {
        var tab = [];
        var checked_seasons = checkedSeasons();
        $('.vegie').each(function() {
            var seasonTableVegieClicked = [];
            var compare = [];
            var t = $(this);
            seasonTableVegieClicked = [t.attr('sp'), t.attr('su'), t.attr('au'), t.attr('wi')];
            for (var i = 0; i < 4; i++) {
                if (parseInt(seasonTableVegieClicked[i]) && parseInt(checked_seasons[i])) {
                    compare.push('1');
                } else {
                    compare.push('0');
                }
            }
            if (JSON.stringify(checked_seasons) == JSON.stringify(compare) && $(this).attr('name').toLowerCase().includes($('#searchVegie').val().toLowerCase())) {
                tab.push($(this).attr('name').toLowerCase());
            }
        });
        return tab;
    }

    $('#searchVegie').on('keyup', function() {
        $('.vegie').each(function() {
            if (MEGAFILTER().includes($(this).attr('name').toLowerCase())) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });


    $(':checkbox').on('click', function() {
        $('.vegie').each(function() {
            if (MEGAFILTER().includes($(this).attr('name').toLowerCase())) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });

});
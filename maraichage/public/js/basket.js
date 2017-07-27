$(document).ready(function () {


    $('#validateBasket').on('click', function () {
        $('#formBasket').submit();
    });

    function displayBasket(tab) {
        $('#basketReceiver').html('');
        tab.forEach(function (a) {
            $('#basketReceiver').append('<span id="' + a + '"><span class="removefromBasket fa fa-times"> </span> ' + a + '</span><span>, ')
        });
        $('.removefromBasket').each(function () {
            $(this).on('click', function () {
                var name = $(this).parent().attr('id');
                console.log(name)
                if (vegiesTabl.includes(name)) {
                    vegiesTabl.splice(vegiesTabl.indexOf(name), 1);
                }
                localStorage.setItem('vegiesTabl', JSON.stringify(vegiesTabl));
                displayBasket(vegiesTabl);
                checkLight();
            });
        });
    }
    var vegiesTabl = []
    if (localStorage.getItem('vegiesTabl')) {
        vegiesTabl = JSON.parse(localStorage.getItem('vegiesTabl'));
        displayBasket(vegiesTabl);

    } else {
        vegiesTabl = [];
        // console.log(vegiesTabl);
        localStorage.setItem('vegiesTabl', JSON.stringify(vegiesTabl));
    }

    $('.vegie').on('click', function () {
        // console.log($(this).attr('sp'));
        // console.log($(this).attr('su'));
        // console.log($(this).attr('au'));
        // console.log($(this).attr('wi'));

        // console.log($(this));
        var name = $(this).attr('name');
        if (vegiesTabl.includes(name)) {
            vegiesTabl.splice(vegiesTabl.indexOf(name), 1);
        } else {
            vegiesTabl.push(name);
        }
        $('#basketReceiver').html('');
        displayBasket(vegiesTabl)
        localStorage.setItem('vegiesTabl', JSON.stringify(vegiesTabl));
        checkLight();
    })

    function checkLight() {
        $('.vegie').each(function () {
            if (vegiesTabl.includes($(this).attr('name'))) {
                $(this).attr('class', 'vegie btn btn-success');
            } else {
                $(this).attr('class', 'vegie btn btn-secondary');
            }
        })
    } checkLight();

    function vegieSearch(str) {
        $('.vegie').each(function () {
            if (!$(this).attr('name').includes(str)) {
                $(this).hide();
            } else {
                $(this).show();
            }

        })
    }
    function checkedSeasons() {
        var checked_seasons = [];
        $('.checkbox-inline').each(function () {
            if ($(this).children().is(':checked')) {
                checked_seasons.push('1');
            } else {
                checked_seasons.push('0');
            }
        });
        return checked_seasons;
    } var coucou = checkedSeasons();

    function seasonsFilter() {
        var checked_seasons = checkedSeasons();
        // console.log(checked_seasons);
        $('.vegie').each(function () {
            var seasonTableVegieClicked = [];
            var compare = [];
            var t = $(this);
            var j = 0;

            seasonTableVegieClicked = [t.attr('sp'), t.attr('su'), t.attr('au'), t.attr('wi')];
            for (var i = 0; i < 4; i++) {
                if (parseInt(seasonTableVegieClicked[i]) && parseInt(checked_seasons[i])) {
                    compare.push('1');
                } else {
                    compare.push('0');
                }
            }
            if (JSON.stringify(checked_seasons) !== JSON.stringify(compare)) {
                t.hide();
            } else {
                t.show();
            }
            // console.log(seasonTableVegieClicked);
            console.log(checked_seasons);
            console.log(compare);
            console.log('   ');
            // console.log(checked_seasons[i]);
        });
    }

    $('#searchVegie').on('keyup', function () {
        vegieSearch($(this).val());
        seasonsFilter();
    })

    $(':checkbox').on('click', function () {
        seasonsFilter();
        vegieSearch($('#searchVegie').val());
    });

})
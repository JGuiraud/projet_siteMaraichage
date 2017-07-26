$(document).ready(function () {


    $('#validateBasket').on('click', function () {
        $('#formBasket').submit();
    })

    function displayBasket(tab) {
        $('#basketReceiver').html('');
        tab.forEach(function (a) {
            $('#basketReceiver').append('<span id="' + a + '"><span class="removefromBasket fa fa-times"> </span> ' + a + '</span><span>, ')
        })
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
            })
        })
    }

    if (localStorage.getItem('vegiesTabl')) {
        var vegiesTabl = JSON.parse(localStorage.getItem('vegiesTabl'));
        displayBasket(vegiesTabl);

    } else {
        var vegiesTabl = [];
        console.log(vegiesTabl);
        localStorage.setItem('vegiesTabl', JSON.stringify(vegiesTabl));
    }

    $('.vegie').on('click', function () {
        // console.log($(this).attr('sp'));
        // console.log($(this).attr('su'));
        // console.log($(this).attr('au'));
        // console.log($(this).attr('wi'));

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
                checked_seasons.push($(this).children().attr('name'));
            }
        })
        return [checked_seasons];
    }

    $('#searchVegie').on('keyup', function () {
        vegieSearch($(this).val());
    })

    $('.checkbox-inline').on('click', function () {
        var checked_seasons = checkedSeasons();
        console.log(checked_seasons)

    })

})
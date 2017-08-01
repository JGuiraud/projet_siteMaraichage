$('.preview1 #verticalTitle').hide();
$('.preview2 #verticalTitle').hide();
$('.preview3 #verticalTitle').hide();

$(document).ready(function () {

    var timer;
    var delay = 200;
    $("#suggestions").hover(function () {
        timer = setTimeout(function () {
            $('.preview1').fadeOut();
            $('.preview3 #horizontalTitle').hide();
            $('.preview2 #horizontalTitle').hide();
            $('.preview3 #verticalTitle').fadeIn('slow');
            $('.preview2 #verticalTitle').fadeIn('slow');
        }, delay);
    }, function () {
        $('.preview2 #verticalTitle').hide();
        $('.preview3 #verticalTitle').hide();
        $('.preview3 #horizontalTitle').fadeIn('fast');
        $('.preview2 #horizontalTitle').fadeIn('fast');
        $('.preview1').fadeIn('slow');
        clearTimeout(timer);
    });
    $("#markets").hover(function () {
        timer = setTimeout(function () {
            $('.preview2').fadeOut();
            $('.preview1 #horizontalTitle').hide();
            $('.preview3 #horizontalTitle').hide();
            $('.preview3 #verticalTitle').fadeIn('fast');
            $('.preview1 #verticalTitle').fadeIn('fast');
        }, delay);
    }, function () {
        $('.preview3 #verticalTitle').hide();
        $('.preview1 #verticalTitle').hide();
        $('.preview1 #horizontalTitle').fadeIn('fast');
        $('.preview3 #horizontalTitle').fadeIn('fast');
        $('.preview2').fadeIn('slow');
        clearTimeout(timer);
    });
    $("#farm").hover(function () {
        timer = setTimeout(function () {
            $('.preview3').fadeOut();
            $('.preview2 #horizontalTitle').hide();
            $('.preview1 #verticalTitle').fadeIn('fast');
            $('.preview1 #horizontalTitle').hide();
            $('.preview2 #verticalTitle').fadeIn('fast');
        }, delay);
    }, function () {
        $('.preview2 #verticalTitle').hide();
        $('.preview1 #verticalTitle').hide();
        $('.preview1 #horizontalTitle').fadeIn('fast');
        $('.preview2 #horizontalTitle').fadeIn('fast');
        $('.preview3').fadeIn('slow');
        clearTimeout(timer);
    });

});
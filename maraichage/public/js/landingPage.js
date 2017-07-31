$('.preview1 #verticalTitle').hide();
$('.preview2 #verticalTitle').hide();
$('.preview3 #verticalTitle').hide();

$(document).ready(function () {

    console.log("ready");



    $("#suggestions").hover(function () {
        $('.preview1').fadeOut();
        $('.preview3 #verticalTitle').fadeIn('slow');
        $('.preview2 #verticalTitle').fadeIn('slow');
        $('.preview3 #horizontalTitle').hide()
        $('.preview2 #horizontalTitle').hide()
    }, function () {
        $('.preview2 #verticalTitle').hide()
        $('.preview3 #verticalTitle').hide()
        $('.preview3 #horizontalTitle').fadeIn('fast')
        $('.preview2 #horizontalTitle').fadeIn('fast')
        $('.preview1').fadeIn('slow');

    });
    $("#markets").hover(function () {
        $('.preview2').fadeOut();
        $('.preview3 #verticalTitle').fadeIn('fast')
        $('.preview1 #verticalTitle').fadeIn('fast')
        $('.preview1 #horizontalTitle').hide()
        $('.preview3 #horizontalTitle').hide()
    }, function () {
        $('.preview1 #horizontalTitle').fadeIn('fast')
        $('.preview3 #horizontalTitle').fadeIn('fast')
        $('.preview3 #verticalTitle').hide()
        $('.preview1 #verticalTitle').hide()
        $('.preview2').fadeIn('slow');
    });
    $("#farm").hover(function () {
        $('.preview3').fadeOut();
        $('.preview1 #verticalTitle').fadeIn('fast')
        $('.preview2 #verticalTitle').fadeIn('fast');
        $('.preview1 #horizontalTitle').hide()
        $('.preview2 #horizontalTitle').hide()
    }, function () {
        $('.preview1 #horizontalTitle').fadeIn('fast')
        $('.preview2 #horizontalTitle').fadeIn('fast')
        $('.preview1 #verticalTitle').hide()
        $('.preview2 #verticalTitle').hide()
        $('.preview3').fadeIn('slow');
    });


    // function checkShrink() {
    //     if (p1 == false) {
    //         console.log('p1 fermé');
    //     } else {
    //         console.log('p1 ouvert')
    //     }
    // }
    // checkShrink();
    // // if ($('#preview1').style.indexOf('display') > - 1)

    // if ($('#preview3').is(':visible')) {
    //     console.log('visible');
    // } else {
    //     console.log('pas visible');

    // }


    // $('.color').on('click', function () {
    //     if (this.className.indexOf('sectionActive') > -1) {
    //         $('color').removeClass('sectionActive');
    //         $(this).addClass('selectActive');
    //     } else {
    //         $(this).addClass('sectionActive');
    //     }
    // console.log(this);
    // $('.color').each(function () {
    //     $(this).toggleClass('sectionActive')
    // });
    // $(this).addClass('sectionActive')
    // $(this).toggleClass('sectionActive');
    // });

    // $('.menu').addClass('flex33');

    // $('.menu').on('click', function () {
    //     if ($(this).attr('id') == 'section1') {
    //         if (this.className.indexOf('flex7') > -1) {
    //             console.log('7');
    //             $(this).toggleClass('flex7').toggleClass('flex86');
    //             $('#section2').toggleClass('flex86').toggleClass('flex7');
    //             $('#section3').toggleClass('flex86').toggleClass('flex7');
    //         } else {
    //             $(this).toggleClass('flex33').toggleClass('flex86');
    //             $('#section2').toggleClass('flex33').toggleClass('flex7');
    //             $('#section3').toggleClass('flex33').toggleClass('flex7');
    //         }
    //     }
    //     if ($(this).attr('id') == 'section2') {
    //         if (this.className.indexOf('flex7') > - 1) {
    //             $(this).toggleClass('flex7').toggleClass('flex86');
    //             $('#section1').toggleClass('flex86').toggleClass('flex7');
    //             $('#section3').toggleClass('flex86').toggleClass('flex7');
    //         } else {
    //             $(this).toggleClass('flex33').toggleClass('flex86');
    //             $('#section1').toggleClass('flex33').toggleClass('flex7');
    //             $('#section3').toggleClass('flex33').toggleClass('flex7');
    //         }
    //     }
    //     if ($(this).attr('id') == 'section3') {
    //         if (this.className.indexOf('flex7') > - 1) {
    //             $(this).toggleClass('flex7').toggleClass('flex86');
    //             $('#section1').toggleClass('flex86').toggleClass('flex7');
    //             $('#section2').toggleClass('flex86').toggleClass('flex7');
    //         } else {
    //             $(this).toggleClass('flex33').toggleClass('flex86');
    //             $('#section1').toggleClass('flex33').toggleClass('flex7');
    //             $('#section2').toggleClass('flex33').toggleClass('flex7');
    //         }
    //     }

    // })

})
$(document).ready(function () {

    $('#submitRecipe').on('click', function () {
        if (!$('#title').val()) {
            $('#title').addClass('warning');
        } if (!$('#description').val()) {
            $('#description').addClass('warning');
        } if ($('#title').val() && $('#description').val()) {
            $('#title').removeClass('warning');
            $('#description').removeClass('warning');
            $('#newRecipeForm').submit();
        }
    });



    /****************** A TERMINER ******************/

    // var basket = JSON.parse(localStorage.getItem('vegiesInBasketForRecipe'));
    // for (var i = 0; i < basket.length; i++) {
    //     console.log(basket[i]);
    //     $('.localstorageReceiver').html('')
    //     $('.localstorageReceiver')
    //         .append($('<div/>').addClass('col-sm-6')
    //             .append('<label><label/>').addClass('control-label').text(basket[i]))
    //         .append($('<input/>')
    //             .attr('name', 'nbIngredients').attr('type', 'text').attr()).append($())
    // }




    // console.log(basket);
    // console.log(basket);
    // console.log(localStorage);


});
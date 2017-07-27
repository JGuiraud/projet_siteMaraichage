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

    $('.annulerRecette').on('click', function () {
        localStorage.clear();
    });


    /****************** A TERMINER ******************/

    var basket = JSON.parse(localStorage.getItem('vegiesInBasketForRecipe'));
    console.log(basket.length)
    $('.nbIngredients').attr('value', basket.length)
    for (var i = 0; i < basket.length; i++) {
        console.log(basket[i]);
        $('.localstorageReceiver').append(
            $('<div class="col-sm-6"><label class="control-label">' + basket[i] + '</label><input type="text" name="ingredient' + i + '" value="' + basket[i] + '" hidden><input class="form-control col-sm-3" type="text" placeholder="Quantité" name="quantity' + (i) + '" value="" required></div>"'));
    }
});

// <div class="col-sm-6">
//     <label class="control-label">Tomates</label><input type="text" name="ingredient1" value="tomate radioactive" hidden><input class="form-control col-sm-3" type="text" placeholder='quantité' name="quantity1" value="" required>
// </div>
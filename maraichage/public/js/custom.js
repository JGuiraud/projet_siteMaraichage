$(document).ready(function () {

    $('.deleteRecipe').on('click', function () {
        var r = confirm("Êtes-vous certains de vouloir supprimer cette recettes ?");
        if (r == true) {
            window.location = $(this).attr('href');
        }
    });


    var max_fields = 100;
    var wrapper = $(".input_fields_wrap");
    var add_button = $(".add_field_button");

    var x = 1;
    var y = 1;
    $(add_button).click(function (e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            y++;
            $("#nbExtraingredients").attr('value', y);
            $(wrapper).append('<div><div class="col-sm-5"><input class="form-control" type="text" name="extraIngredient' + y + '" placeholder="ingrédient supplémentaire"></div><div class="col-sm-5"><input class="form-control" type="text" name="extraQuantity' + y + '" placeholder="Quantité">        </div><a href="#" class="remove_field col-sm-1 control-label"><i class="fa fa-times" aria-hidden="true"></i></div></div>');
        }
    });

    $(wrapper).on("click", ".remove_field", function (e) {
        e.preventDefault(); $(this).parent('div').remove(); x--;
    });




});
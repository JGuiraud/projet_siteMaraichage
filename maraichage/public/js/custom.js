$(document).ready(function () {
    $('.deleteRecipe').on('click', function () {
        var r = confirm("Êtes-vous certains de vouloir supprimer cette recettes ?");
        if (r == true) {
            window.location = $(this).attr('href');
        }
    });

});
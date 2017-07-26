$('#subm').on('click', function () {
    console.log($("#addVegie").val())
    if (!$("#addVegie").val()) {
        alert('Veuillez entrer le nom d\'un légume à ajouter');
    } else {
        $('#vegieForm').submit()
    }
})

$('.deleteVegie').on('click', function (e) {
    var r = confirm("Êtes-vous certains de vouloir supprimer le légume : " + $(this).attr('name') + " ?");
    if (r == true) {
        window.location = $(this).attr('href');
    }
});
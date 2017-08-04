function checkAlreadyExistsInList() {
    var tab = [];
    $('.table-striped').children('tbody').children('tr').each(function () {
        tab.push($(this).children('td').text().split('\n')[0].toLowerCase());
    });
    var includes = tab.includes($('#addVegie').val().toLowerCase());
    return includes;
}

$('#subm').on('click', function () {
    if (!$("#addVegie").val()) {
        $("#modal").modal();
    } else if (checkAlreadyExistsInList()) {
        $("#modal2").modal();
    } else {
        $('#vegieForm').submit()
    }
});


$('.deleteVegie').on('click', function (e) {
    var r = confirm("Êtes-vous certains de vouloir supprimer le légume : " + $(this).attr('name') + " ?");
    if (r == true) {
        window.location = $(this).attr('href');
    }
});

$(document).ready(function () {
    $("#fireme").click(function () {
    });
});
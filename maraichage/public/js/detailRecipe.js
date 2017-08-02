(function(){

    console.log('coucou');


    $('#print').on('click', function() {
        window.print();
    })

    $('.stock').on('click', function(){
        var name = $(this).attr('name');
        $('#stockDisplay'+name).toggle();
    })

    $('#modalCaller').on('click', function () {
        $("#modal").modal();
    });

    $('#modalSubmit').on('click', function(){
        $('#modalform').submit();
    });

})()

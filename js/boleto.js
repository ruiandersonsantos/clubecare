//boleto
$(window).load(function () {
    $('#id_boleto').on('click', function () {
        $('#cpf').val('');
        $('#modal_boleto').modal('show');
    });

    $('#menutopo li').click(function () {
        $(this).attr('class', '');
    });


})
 ;(function ($) {})(jQuery)

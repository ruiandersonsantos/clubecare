//boleto
$(window).load(function () {
    /* 18/10/2016 - Alterei de id para class, porem com o mesmo nome */
    $('.id_boleto').on('click', function () {
        $('#cpf').val('');
        $('#modal_boleto').modal('show');
    });

    $('#menutopo li').click(function () {
        $(this).attr('class', '');
    });


})
 ;(function ($) {})(jQuery)

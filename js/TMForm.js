//TMForm 1.0.1
$(window).load(function () {
    $('#btn_enviar').click(function () {

        var nome = "", telefone = "", email = "", mensagem = "", vll_ok = true;

        var url = $('#contact-form').attr('itemid');


        $('#val_nome').css('color', 'red').hide();
        $('#val_telefone').css('color', 'red').hide();
        $('#val_email').css('color', 'red').hide();
        $('#val_mensagem').css('color', 'red').hide();

        nome = $('#contato_nome').val();
        telefone = $('#contato_telefone').val();
        email = $('#contato_email').val();
        mensagem = $('#contato_mensagem').val();

        if (nome === "") {
            $('#val_nome').css('color', 'red').show();
            vll_ok = false;
        }

        if (telefone === "") {
            $('#val_telefone').css('color', 'red').show();
            vll_ok = false;
        }

        if (email === "") {
            $('#val_email').css('color', 'red').show();
            vll_ok = false;
        }

        if (mensagem === "") {
            $('#val_mensagem').css('color', 'red').show();
            vll_ok = false;
        }


        if (vll_ok) {

            $('#val_nome').css('color', 'red').hide();
            $('#val_telefone').css('color', 'red').hide();
            $('#val_email').css('color', 'red').hide();
            $('#val_mensagem').css('color', 'red').hide();


            $.post(url, {
                nome: nome,
                telefone: telefone,
                email: email,
                mensagem: mensagem

            },
                    function (data, status) {

                        $("#msg_sucesso").hide();
                        $("#msg_error").hide();

                        if (data === "sucesso") {
                            $('#contact-form').each(function () {
                                this.reset();
                            });
//                                $("#msg_sucesso").show();

                            $("#modalSucesso").modal('show');
                        } else {
//                        $("#msg_error").show();

                            $("#modalErro").modal('show');
                        }

                    });



        } else {

            return vll_ok;
        }



    });
})

 ;(function ($) {})(jQuery)

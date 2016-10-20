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

            muda_situacao_botao()
            
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
                       
                    $("#modalSucesso").modal('show');
                    volta_situacao_botao();
                    
                } else {
                      
                    $("#modalErro").modal('show');
                    volta_situacao_botao();
                }

            });
        } else {

            return vll_ok;
        }



    });
 
})

        ;
(function ($) {
})(jQuery)

/* Inicio campo alterado Linha que foi alterada */
function muda_situacao_botao() {
    $('#btn_enviar').text('Aguarde..').append('&nbsp;&nbsp;&nbsp;&nbsp&nbsp&nbsp<i style="display: none; position: relative; float: right;" id="div_icone_enviando" class="fa fa-spinner fa-spin"></i>');

    $('#div_icone_enviando').css({
        display: 'block'
    });
}
;

function volta_situacao_botao() {
    $('#btn_enviar').text('Enviar').remove('&nbsp;&nbsp;&nbsp;&nbsp&nbsp&nbsp<i style="display: none; position: relative; float: right;" id="div_icone_enviando" class="fa fa-spinner fa-spin"></i>');

}
;

/* Inicio campo alterado Linha que foi alterada */

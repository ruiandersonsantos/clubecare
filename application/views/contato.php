<section class="well well4">
    <div class="container">

        <h2>

            Contato
        </h2>
        <form id="contact-form" itemid="<?= base_url("contato/enviar") ?>" class='contact-form'>
            <div class="contact-form-loader"></div>
            <fieldset>
                <label class="name">
                    <span hidden="true" id="val_nome" >*Nome é obrigatorio.</span>
                    <input type="text" required="required" name="contato_nome" id="contato_nome" placeholder="Nome:" value="" />

                </label>              

                <label class="phone">
                    <span hidden="true" id="val_telefone" >*Telefone é obrigatorio.</span>
                    <input type="text" required="required" name="contato_telefone" id="contato_telefone" placeholder="Telefone:" value="" />


                </label>

                <label class="email">
                    <span hidden="true" id="val_email"  >*E-mail é obrigatorio.</span>
                    <input type="text" name="contato_email" id="contato_email" placeholder="Email:" value="" />


                </label>

                <label class="message">
                    <textarea name="contato_mesagem" id="contato_mensagem" placeholder="Mensagem" ></textarea>
                    <span hidden="true" id="val_mensagem" >*Mensagem é obrigatoria.</span>

                </label>

   <!--  <label class="recaptcha"> <span class="empty-message">*This field is required.</span> </label> -->

                <div class="btn-wr text-primary" >
                    <a class="btn btn-primary" id="btn_enviar" href="#" data-type="submit">Enviar</a>
                </div>

                <div id="msg_sucesso" hidden="true">
                    Sua mensagem foi enviada com sucesso!
                </div>

                <div id="msg_error" hidden="true">
                    Erro enviando formulario!
                </div>

            </fieldset>

        </form>


    </div>        
</section>

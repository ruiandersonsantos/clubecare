<!--========================================================
                               FOOTER
     =========================================================-->
<footer class="top-border">

    <section> 
        <div class="map map_height1">
            <div id="google-map" class="map_model" data-zoom="16"></div>
            <ul class="map_locations">
                <li data-y="-22.904541" data-x=" -43.179749" data-basic="<?= base_url("images/gmap_marker.png") ?>" data-active="<?= base_url("images/gmap_marker_active.png") ?>">
                    <div class="location">
                        <h3 class="txt-clr1">
                            Estamos
                            <small>
                                aqui
                            </small>
                        </h3>  
                        <address>
                            <dl>
                                <dt>Telefone: </dt>
                                <dd class="phone"><a href="callto:#"> (21)3553-9188</a></dd>
                            </dl>
                            <dl>
                                <dt>Endereço: </dt>
                                <dd> Rua do Ouvidor, 161 / 604 - Centro - RJ</dd>
                            </dl>
                            <dl>
                                <dt>Whatsapp </dt>
                                <dd>(21)9999-9999</dd>
                            </dl>
                            <dl>
                                <dt> E-mail: </dt>
                                <dd><a href="mailto:#">contato@clubecare.com.br</a></dd>
                            </dl>
                        </address>

                    </div>
                </li>

            </ul>
        </div>
    </section>


<!--    <section style="background: #f2f2f2;" class="well1">
        <div class="container"> 
            <div style="border-right: 1px solid #ccc" class="col-md-4 col-sm-12">
                <a target="_blank" href="http://www.ans.gov.br/" id="" name="" >
                    <img src="<?= base_url("images/logo_ans.gif") ?>" alt=""/>
                </a>
            </div>  

            <div style="border-right: 1px solid #ccc" class="col-md-4 col-sm-12">
                <a id="link_rodape_sobrenos" href="#">Sobre nós</a><br />
                <a id="link_rodape_serviços" href="#">Nossos Serviços</a><br />
                <a id="link_rodape_faleConosco" href="#">Fale Conosco</a>
            </div>  

            <div class="col-md-4 col-sm-12 text-center">
                <strong style="font-size: 18px;">Nossos Canais Sociais</strong>
                <div class="row">
                    <div style="margin-left:90px;" class="col-md-2 col-sm-12">
                        <a class="" href="#" id="" name="" >
                            <img src="<?= base_url("images/icon_face.ico") ?>" width="40" height="40" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <a class="" href="#" id="" name="" >
                            <img src="<?= base_url("images/twitter-icon.png") ?>" width="40" height="40" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <a class="" href="#" id="" name="" >
                            <img src="<?= base_url("images/icon_youtube.png") ?>" width="40" height=40" alt=""/>
                        </a>
                    </div>

                </div>
            </div>   

        </div> 
    </section>    -->

    <section style="background: #f2f2f2;" class="well1">
        <div class="container"> 
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div style="border-right: 1px solid #ccc; margin: 10px 0px;" class="col-sm-12 col-md-4">
                    <a target="_blank" href="http://www.ans.gov.br/" id="" name="" >
                        <img src="<?= base_url("images/logo_ans.gif") ?>" alt=""/>
                    </a>
                </div>  

                <!-- Alteração Simone em 28/10/2016 - Inclusão do link para acesso ao Webmail clubecare -->
                <div style="border-right: 1px solid #ccc; margin: 10px 0px;" class="col-xs-12 col-md-4 col-sm-12">
                    <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-md-12"><a id="link_rodape_sobrenos" href="#">Sobre nós</a></div>
                    <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-md-12"><a id="link_rodape_serviços" href="#">Nossos Produtos</a></div>
                    <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-md-12"><a id="link_rodape_faleConosco" href="#">Fale Conosco</a></div>
                    <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-md-12"><a id="link_rodape_webmail" target="blanck" href="http://webmail.clubecare.com.br/">Webmail</a></div>
                </div>  

                <div  style="margin: 10px 0px;"  class="col-xs-12 col-sm-12 col-md-4 text-center">
                    <strong style="font-size: 18px;">Nossos Canais Sociais</strong>
                    <div class="row">
                        <div class="col-xs-3 col-xs-offset-2 col-sm-2 col-sm-offset-3 col-md-offset-3 col-md-2">
                            <a class="" href="#" id="" name="" >
                                <img src="<?= base_url("images/icon_face.ico") ?>" width="40" height="40" alt=""/>
                            </a>
                        </div>
                        <div class="col-xs-3 col-md-2 col-sm-2 col-md-2">
                            <a class="" href="#" id="" name="" >
                                <img src="<?= base_url("images/twitter-icon.png") ?>" width="40" height="40" alt=""/>
                            </a>
                        </div>
                        <div class="col-xs-3 col-sm-2 col-md-2">
                            <a class="" href="#" id="" name="" >
                                <img src="<?= base_url("images/icon_youtube.png") ?>" width="40" height=40" alt=""/>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div> 
    </section>    
</footer>
</div>

<!--JS-->
<script src="<?= base_url("js/jquery.js") ?>"></script>
<script src="<?= base_url("js/jquery-migrate-1.2.1.min.js") ?>"></script>
<script src="<?= base_url("js/rd-smoothscroll.min.js") ?>"></script>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->         
<script src="<?= base_url("js/bootstrap.min.js") ?>"></script>
<script src="<?= base_url("js/tm-scripts.js") ?>"></script>
<!-- </script> -->


</body>
</html>

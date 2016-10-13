<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="format-detection" content="telephone=no"/>
        <link rel="icon" href="<?= base_url("images/icone_clube.png") ?>" type="image/x-icon"/>
        <title>ClubeCare</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>" media="all"/>

        <!-- Links -->
         <link rel="stylesheet" href="<?= base_url("css/contact-form.css") ?>">

        <link rel="stylesheet" href="<?= base_url("css/camera.css") ?>" media="all"/>
        <link rel="stylesheet" href="<?= base_url("css/search.css") ?>" media="all"/>
        <link rel="stylesheet" href="<?= base_url("css/google-map.css") ?>" media="all"/>


        <!--JS-->
        <script src="<?= base_url("js/jquery.js") ?>"></script>
        <script src="<?= base_url("js/jquery-migrate-1.2.1.min.js") ?>"></script>
        <script src="<?= base_url("js/rd-smoothscroll.min.js") ?>"></script>
       
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJLHtlIlFJEBrnPIeZso1R6sMQBHas3Xg"  type="text/javascript"></script>


        <!--[if lt IE 9]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
                <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                     alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
            </a>
        </div>
        <script src="js/html5shiv.js"></script>
        <![endif]-->
        <script src="<?= base_url("js/device.min.js") ?>"></script>
       
    </head>
    <body>
        <div class="page">
            <!--========================================================
                                      HEADER
            =========================================================-->
            <header>  
                <div class="container top-sect">
                    <div class="navbar-header">
                        <img src="<?= base_url("images/clubcare_1.png") ?>" alt=""/>
                    </div>

                    <div class="help-box text-right">
                        <p>Precisa de ajuda?</p>
                        <a href="callto:#">(21)3553-9188</a>

                    </div>
                </div>


                <div id="stuck_container" class="stuck_container">
                    <div class="container">   
                        <nav class="navbar navbar-default navbar-static-top pull-left">            

                            <div class="">  
                                <ul id="menutopo" class="nav navbar-nav sf-menu" data-type="navbar">
                                    <li class="<?= $home_active ?>">
                                        <a href="<?= base_url("") ?>">HOME</a>
                                    </li>
                                    <li>
                                        <a href="#">SOBRE</a>
                                    </li>
                                    <li class="">
                                        <a href="#">SERVIÇOS<span aria-hidden="true"></span></a>
                                        
                                    </li >                

                                    <li class="<?= $contato_active ?>">
                                        <a href="<?= base_url("contato") ?>">CONTATOS</a>
                                    </li>
                                </ul>                           
                            </div>
                        </nav>   
                        <form class="search-form" action="http://sis.boletar.com.br/landing/clubecare/cliente.php" method="POST" accept-charset="utf-8">
                            <label class="search-form_label">
                                <input class="search-form_input" type="text" id="cpf" name="cpf" autocomplete="off" placeholder="2ª via do boleto"/>
                                <span class="search-form_liveout"></span>
                            </label>
                            <button class="search-form_submit fa-search" type="submit"></button>
                        </form>

                    </div>

                </div>  
            </header>
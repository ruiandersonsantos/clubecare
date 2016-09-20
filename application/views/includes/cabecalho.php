<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="format-detection" content="telephone=no"/>
        <link rel="icon" href="<?= base_url("images/favicon.ico") ?>" type="image/x-icon"/>
        <title>HOME</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>" media="all"/>

        <!-- Links -->


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
                        <h1 class="navbar-brand">
                            <a data-type='rd-navbar-brand'  href="./">ClubeCare<small>Administradora de benefícios</small></a>
                        </h1>
                        <a class="search-form_toggle" href="#"></a>
                    </div>

                    <div class="help-box text-right">
                        <p>Precisa de ajuda?</p>
                        <a href="callto:#">21-98766-8572</a>

                    </div>
                </div>


                <div id="stuck_container" class="stuck_container">
                    <div class="container">   
                        <nav class="navbar navbar-default navbar-static-top pull-left">            

                            <div class="">  
                                <ul class="nav navbar-nav sf-menu" data-type="navbar">
                                    <li class="active">
                                        <a href="./">HOME</a>
                                    </li>
                                    <li>
                                        <a href="index-1.html">SOBRE</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="index-2.html">SERVIÇOS<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">Lorem ipsum</a>
                                            </li>
                                            <li>
                                                <a href="#">Dolor sit amet  </a>                      
                                            </li>
                                            <li>
                                                <a href="#">Conse ctetur </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="#">Latest</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Archive</a>
                                                    </li>                      
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>                

                                    <li>
                                        <a href="index-4.html">CONTATOS</a>
                                    </li>
                                </ul>                           
                            </div>
                        </nav>   
                        <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
                            <label class="search-form_label">
                                <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder="2ª via do boleto"/>
                                <span class="search-form_liveout"></span>
                            </label>
                            <button class="search-form_submit fa-search" type="submit"></button>
                        </form>

                    </div>

                </div>  
            </header>
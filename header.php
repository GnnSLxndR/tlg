<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <!-- Bootstrap -->
    <?php wp_head();?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>

    <!--Header of The Little Gym-->
    <nav id="header" class="navbar navbar-default navbar-tlg navbar-fixed-top">
        <!--Top Bar -->
        <div class="top_bar">
            <div class="container">
            <div class="row">

                <!--Mobile Top Bar-->
                <div class="visible-xs visible-sm">
                    <div class="col-sm-9">
                        <span>Norte de Bogotá &nbsp;• &nbsp; </span>
                        <a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!--Desktop Viewport-->
                <div class="hidden-xs hidden-sm">
                    <div class="col-md-8">
                        <span class="">+57 (1) 703 1611 &nbsp; • &nbsp; Av. 19 No. 104-37, Local 1 &nbsp; - &nbsp; Al norte de Bogotá &nbsp; • &nbsp; </span>

                        <a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>

                    </div>

                    <div class="col-md-4">
                        <div class="encuentra pull-right">
                            <a href="#" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Encuentra un The Little Gym</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
        <!--Top Bar -->
        <div id="header-container" class="container navbar-container">


            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="brand" class="navbar-brand navbar-brand-tlg" href="<?php home_url(); ?>">
                    <img class="white-logo" src="<?php bloginfo('template_url'); ?>/static/logo-tlg.png">
                    <img src="<?php bloginfo('template_url'); ?>/static/logo-tlg-green.png" class="green-logo hidden-md hidden-lg">


                </a>
            </div>
            <?php 
              $args = array(
                "theme_location"=>"", 
                "menu"=>"Menu 1",       
                "container"=>"div",   
                "container_class"=>"collapse navbar-collapse",  
                "container_id"=>"navbar",   
                "menu_class"=>"nav navbar-nav", 
                "menu_id"=>"",     
                'items_wrap' => '<ul id="%1$s" class="text-center text-uppercase %2$s">%3$s</ul>',
                "echo"=>true,    
                "fallback_cb"=>"wp_page_menu",  
                "depth"=>0     
              );
            wp_nav_menu($args); ?><!--/.nav-collapse -->
        </div>
    </nav>
</header>
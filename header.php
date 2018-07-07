<!doctype html>
<html lang="pl">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <link href="https://fonts.googleapis.com/css?family=Eagle+Lake|Eczar" rel="stylesheet">

    <title>wing chun</title>
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/main.css">



    <?php wp_head()?>
</head>
<body>
<div class="bgcontainer" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/backgrounds/backgroundB.jpg">
    <section class="container">
    <div class="row">
    <header class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-" id="Start">

        <section class="container">
            <div class="row">

        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-">
            <h3 class="title">Wing Chun School</h3></div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col- menuContainer">
                    

                        <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle menuBtnFixed" type="button" data-toggle="dropdown">Menu
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <?php wp_nav_menu(); ?>
                            <hr>
                            <li><a class="dropdown-item" href="<?=  home_url()?>">Homepage</a></li>
                            <li><a class="dropdown-item" href="#Start">Start</a></li>
                            <li><a class="dropdown-item" href="#End">Contact</a></li>
                            <li><div class="yin" id="yin-yang"></div></li>
                        </ul>

                    </div>
            </div>
            </div>
        </section>
    </header>
    </div>
    </section>

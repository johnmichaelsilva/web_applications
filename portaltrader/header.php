<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php if(isset($title)){ echo $title; }?></title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Executive Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //font-awesome icons -->
    <link href="//fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
<!-- banner -->
<?php
if($bannerInfo == 1) {
?>
<div class="banner">
<?php } else { ?>
<div class="banner1">
<?php } ?>
    <div class="container">
        <div class="agile-header">
            <div class="agileits-contact-info text-right">
                <ul>
                    <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">mail@example.com</a></li>
                    <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+080 264 995</li>
                </ul>
            </div>
            <div class="w3_agileits_social_media">
                <ul>
                    <li class="agileinfo_share">Redes Sociais</li>
                    <li><a href="#" class="wthree_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>

                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand" href="index.php">Portal Trader</a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="menu menu--iris">
                    <ul class="nav navbar-nav menu__list">
                        <li class="menu__item"><a href="index.php" class="menu__link">Home</a></li>
                        <li class="menu__item"><a href="about.php" class="menu__link">Quem Somos</a></li>
                        <li class="menu__item"><a href="produtos.php" class="menu__link">Produtos</a></li>
                        <li class="menu__item"><a href="servicos.php" class="menu__link">Serviços</a></li>
                        <li class="menu__item"><a href="contact.php" class="menu__link">Contatos</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
        <?php if($bannerInfo == 1) { ?>
        <div class="w3l_banner_info">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="wthree_banner_info_grid">
                                <h4>Latin literature </h4>
                                <h3>It has roots in a piece of classical Latin </h3>
                                <h5>classical Latin</h5>
                            </div>
                        </li>
                        <li>
                            <div class="wthree_banner_info_grid">
                                <h4>simply random</h4>
                                <h3>Lorem Ipsum is not simply random text.</h3>
                                <h5>classical Latin</h5>
                            </div>
                        </li>
                        <li>
                            <div class="wthree_banner_info_grid">
                                <h4>Latin literature</h4>
                                <h3>It has roots in a piece of classical Latin</h3>
                                <h5>classical Latin</h5>
                            </div>
                        </li>
                        <li>
                            <div class="wthree_banner_info_grid">
                                <h4>simply random</h4>
                                <h3>Lorem Ipsum is not simply random text.</h3>
                                <h5>classical Latin</h5>
                            </div>
                        </li>
                        <li>
                            <div class="wthree_banner_info_grid">
                                <h4>Latin literature</h4>
                                <h3>It has roots in a piece of classical Latin</h3>
                                <h5>classical Latin</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- flexSlider -->
            <script defer src="js/jquery.flexslider.js"></script>
            <script type="text/javascript">
                $(window).load(function(){
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>
            <!-- //flexSlider -->
        </div>

            <?php } ?>

    </div>
</div>
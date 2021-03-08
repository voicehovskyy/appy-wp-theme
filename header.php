<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!-- Start Preloader -->

    <div class="preloader">
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>

    <!-- End Preloader -->

    <!-- Start Header -->
    <header>
        <!-- Start Nav -->
        <nav class="navbar navbar-default appy-menu" data-spy="appy-menu">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                    <?php echo get_custom_logo(); ?>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->    
                    <?php
                     wp_nav_menu( [
                        'theme_location'  => 'hader-menu',
                        'menu'            => 'Header Menu', 
                        'container'       => 'div', 
                        'container_class' => 'collapse navbar-collapse', 
                        'container_id'    => 'main_menu',
                        'menu_class'      => 'nav navbar-nav navbar-right',     
                    ] ); ?>


              <!--         <li class="active"><a class="scroll-section" href="#home_banner">home</a></li>
                        <li><a class="scroll-section" href="#about">about</a></li>
                        <li><a class="scroll-section" href="#features">features</a></li>
                        <li><a class="scroll-section" href="#screenshots">screenshots</a></li>
                        <li><a class="scroll-section" href="#team">team</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="scroll-section" href="#recent-blog">Recent Blog</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="single-blog.html">Single Blog</a></li>
                            </ul>
                        </li>
                        <li><a class="scroll-section" href="#contact">contact</a></li>
                    </ul> --> -->

               
               
            </div>
        </nav>
        <!-- End Nav -->
    </header>
    <!-- End Header -->
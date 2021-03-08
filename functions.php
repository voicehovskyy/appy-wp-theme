<?php

// функции поддержки в теме
add_theme_support( 'custom-logo');
add_theme_support( 'menus');
add_theme_support( 'post-thumbnails');
// Регистрация меню

register_nav_menu('hader-menu' ,'Header Menu' );
// Стили
add_action('wp_enqueue_scripts', 'appy_styles');

function appy_styles()
{
	wp_enqueue_style('style-bootstrap',      get_template_directory_uri() . "/assets/css/bootstrap.min.css");
    wp_enqueue_style('style-awesome',        get_template_directory_uri() . "/assets/css/font-awesome.min.css");
	wp_enqueue_style('style-carousel',       get_template_directory_uri() . "/assets/css/owl.carousel.min.css");
	wp_enqueue_style('style-carousel-theme', get_template_directory_uri() . "/assets/css/owl.theme.default.min.css");
	wp_enqueue_style('style-animate',        get_template_directory_uri() . "/assets/css/animate.css");
    wp_enqueue_style('style-aos',            get_template_directory_uri() . "/assets/css/aos.css");
	wp_enqueue_style('style-lity',           get_template_directory_uri() . "/assets/css/lity.min.css");
	wp_enqueue_style('style-font-awesome',   "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
	wp_enqueue_style('style-main',           get_template_directory_uri() . "/assets/css/main.css");
	wp_enqueue_style('style-theme',          get_stylesheet_uri());
}
// Скрипты
add_action('wp_enqueue_scripts', 'appy_scripts');
function appy_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery',  get_template_directory_uri() . '/assets/js/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script( 'jquery-js',   get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0', true );

	wp_enqueue_script( 'bootstrap-js',  get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0', true );
	wp_enqueue_script( 'carousel-js',   get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0', true );
	wp_enqueue_script( 'waypoints-js',  get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), '1.0', true);
	wp_enqueue_script( 'counterup-js',  get_template_directory_uri() . '/assets/js/jquery.counterup.js', array(), '1.0', true );
	wp_enqueue_script( 'aos-js',        get_template_directory_uri() . '/assets/js/aos.js', array(), '1.0', true );
	wp_enqueue_script( 'min-js',        get_template_directory_uri() . '/assets/js/lity.min.js', array(), '1.0', true );
	wp_enqueue_script( 'main-js',       get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
}
// Глобальная страница ASF
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


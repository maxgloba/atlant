<?php

define('ROOT', get_template_directory_uri());
define('IMG', ROOT . '/img');
define('VIDEO', ROOT . '/video');

add_theme_support( 'post-thumbnails' );

include('include/clear.php');
include('include/formCons.php');

add_theme_support( 'menus' );

function front_scripts() {
// Home page
	if( is_page_template( array( 'templates/page-home.php' ) ) ){
		wp_enqueue_style( 'styles', get_template_directory_uri().'/css/styles-home.css');
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts-index.js', false, false, 'in_footer');
	}
}
add_action( 'wp_enqueue_scripts', 'front_scripts' );

function front_variables(){
	wp_localize_script( 'scripts', 'data',
		array(
			'ajax' => admin_url('admin-ajax.php'),
			'theme' => get_template_directory_uri()
		)
	);
}
add_action( 'wp_enqueue_scripts', 'front_variables' );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

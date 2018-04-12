<?php
function ozonean_theme_setup(){
	//Adicionando imagens ao post
	add_theme_support('post-thumbnails');
}
//Adicionando estilos e scripts
function add_estilos_e_scripts() {
	//CSS
     wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css');
		wp_enqueue_style( 'slick', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick.css');
     wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick-theme.css');
		wp_enqueue_style( 'main', get_template_directory_uri() . '/src/css/main.css');
	//JS
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick.min.js');
}
add_action('after_setup_theme', 'ozonean_theme_setup');
add_action('wp_enqueue_scripts', 'add_estilos_e_scripts' );
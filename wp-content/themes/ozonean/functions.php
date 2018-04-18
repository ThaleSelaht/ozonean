<?php
function ozonean_theme_setup(){
	//Adicionando imagens ao post
	add_theme_support('post-thumbnails');
	//Menus
	register_nav_menus(array(
		'primary' => __('Menu primário')
	));
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
		/*wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/src/js/main.js');*/
}
add_action('after_setup_theme', 'ozonean_theme_setup');
add_action('wp_enqueue_scripts', 'add_estilos_e_scripts' );

//Localização dos Widget
function init_widgets($id){
	register_sidebar(array(
		'name' 		    => 'Sidebar',
		'id'   		    => 'sidebar',
		'before_widget' => '<div class="block side-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
}

add_action('widgets_init', 'init_widgets');
	//Excerp Length
	function lab_set_excerpt_length(){
		return 40;
	}

add_filter('excerpt_length', 'lab_set_excerpt_length');

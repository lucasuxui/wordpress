<?php
//Carregando Style/Js
function add_theme(){
	wp_enqueue_script("main",   WP_SCRIPTS . "./main.min.js", array('jquery'), "1.0", true);
	wp_enqueue_style( 'style',  WP_STYLES . './style.min.css',false,'1.1','all');
}
add_action('wp_enqueue_scripts', 'add_theme');

function theme_functions()
{
    /**
     * Título do Documento
     */
    add_theme_support('title-tag');

    /**
     * Miniaturas
     */
    add_theme_support('post-thumbnails');

    /**
     * Menus
     */
		 register_nav_menus( array(
		 	'primary' => __( 'Menu da Template', 'Base' ),
		 ) );

    /**
     * Formato de Posts
     */
    add_theme_support('post-formats', array(
        'sidebar',
    ));

    /**
     * Adiciona Crops de Imagens
     */
    add_image_size('nome-do-tamanho','width','height', true);
}

add_action('after_setup_theme', 'theme_functions');

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

function widgets_init()
{
    register_sidebar(array(
        'name' => __('Home'),
        'id' => 'home',
        'description' => __('Manipula os widgets na Home'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Barra Lateral - Blog'),
        'id' => 'sidebar-blog',
        'description' => __('Manipula os widgets na barra lateral blog.'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'widgets_init');

?>

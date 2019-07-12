<?php  
//Carregando Style/Js
wp_enqueue_script("main", get_template_directory_uri() . "./dist/js/main.min.js", array(), "1.0", true);   
wp_enqueue_style( 'style', get_template_directory_uri() . './dist/css/style.min.css',false,'1.1','all');
?>      
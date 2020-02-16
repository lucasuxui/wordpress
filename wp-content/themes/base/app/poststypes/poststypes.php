<?php
if (!function_exists('teste')) {

function teste() {
    $singular = 'Teste';
    $singularLow = 'teste';
    $plural = 'Testes';
    $pluralLow = 'testes';
        
    $slug = 'teste';

    $labels = array(
        'name' => $plural,
        'singular_name' => $singular,
        'menu_name' => $plural,
        'parent_item_colon' => $plural,
        'all_items' => 'Todos os '.$pluralLow,
        'view_item' => 'Ver '.$pluralLow,
        'add_new_item' => 'Adicionar novo '.$singularLow,
        'add_new' => 'Novo '.$singularLow,
        'edit_item' => 'Editar '.$singularLow,
        'update_item' => 'Atualizar '.$singularLow,
        'search_items' => $singular,
        'not_found' => 'Nenhum '.$singularLow.' encontrado',
        'not_found_in_trash' => 'Nenhum '.$singularLow.' encontrado na lixeira',
    );

    $rewrite = array(
        'slug' => $slug,
        'with_front' => true,
        'pages' => true,
        'feeds' => false,
    );

    $args = array(
        'label' => $plural,
        'description' => $plural.' é um custom posttype',
        'labels' => $labels,
        'supports' => array('title', 'thumbnail','editor'),
        'taxonomies' => array(),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        //puxar o posttype para o menu e criar a sub sessão
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-plugins-checked',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'query_var' => $slug,
        'rewrite' => $rewrite,
        'capability_type' => 'post',
        'show_in_rest' => true,
        'supports' => array('editor'),
    );
    register_post_type($slug, $args);
}

add_action('init', 'teste');
}
if (!function_exists('tax_for_categoria_testes')) {
function tax_for_categoria_testes() {
    register_taxonomy('categoria-testes', 'teste', array(
            'label' => __('Categoria'),
            'rewrite' => array(
                'slug' => 'categoria-testes',
                'with_front' => true,
                'hierarchical' => true,
            ),
            'hierarchical' => true,            
        )                
    );    
    register_taxonomy('tag-testes','teste',array(
        'hierarchical' => false,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'tag' ),
    ));
}
add_action('init', 'tax_for_categoria_testes');
}

<?php
if (!function_exists('teste')) {

function teste()
{
    $labels = array(
        'name' => 'Testes',
        'singular_name' => 'Teste',
        'menu_name' => 'Testes',
        'parent_item_colon' => 'Testes',
        'all_items' => 'Todos os Testes',
        'view_item' => 'Ver Testes',
        'add_new_item' => 'Adicionar nova teste',
        'add_new' => 'Novo teste',
        'edit_item' => 'Editar teste',
        'update_item' => 'Atualizar teste',
        'search_items' => 'Produto',
        'not_found' => 'Nenhum teste encontrado',
        'not_found_in_trash' => 'Nenhum teste encontrado na lixeira',
    );

    $rewrite = array(
        'slug' => 'teste',
        'with_front' => true,
        'pages' => true,
        'feeds' => false,
    );

    $args = array(
        'label' => 'Testes',
        'description' => 'Testes',
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
        'query_var' => 'teste',
        'rewrite' => $rewrite,
        'capability_type' => 'post',
    );
    register_post_type('teste', $args);
}

add_action('init', 'teste');
}
if (!function_exists('tax_for_categoria_testes')) {
function tax_for_categoria_testes()
{
    register_taxonomy('categoria-testes', 'teste', array(
            'label' => __('Categoria'),
            'rewrite' => array(
                'slug' => 'categoria-testes',
                'with_front' => true,
                'hierarchical' => true,
            ),
            'hierarchical' => true)
    );
}
add_action('init', 'tax_for_categoria_testes');
}

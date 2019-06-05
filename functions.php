<?php
    // ativando suporte a imagem destacada
    add_theme_support('post-thumbnails');

    // ativando menu dinamicos
    function register_my_menus() {
        register_nav_menus (
            array(
                'header-menu' => __('Menu do Topo')
            )
        );
    }
    add_action('init', 'register_my_menus');

    // Meus posts types
    function meus_posts_types() {
        // Habilidades
        register_post_type('equipe',
            array(
                'labels'    =>  array(
                    'name'          => __('Equipe'),
                    'singular_name' => __('Membro')
                ),
                'public'        => true,
                'has_archive'   => true,
                'menu_icon'     => 'dashicons-groups',
                'supports'      =>  array('title', 'thumbnail', 'page-attibutes'),
            )
            );
    }
    add_action('init', 'meus_posts_types');
?>
<?php
    // Menu główne
    function dys_menus() {
        register_nav_menus(
                array(
                    'glowne-menu' => __('Główne menu'),
                    'extra-menu' => __('Extra Menu')
                )
        );
    }
    add_action('init', 'dys_menus');
    
    // Obraz wprowadzający we wpisie
    add_theme_support( 'post-thumbnails' );

    // Data
        setlocale(LC_ALL, 'pl_PL.UTF-8');
        
    // Paginacja 
    function dys_pagination() {
        global $wp_query;
        echo paginate_links();
    }    
    // Galeria
//        add_filter( 'baguettebox_enqueue_assets', '__return_true' );

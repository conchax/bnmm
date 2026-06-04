<?php
if (! defined('ABSPATH')) {
    exit; // Salir si se accede directamente
}

function mi_tema_bnmm_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'mi-tema-bnmm'),
    ));
}
add_action('after_setup_theme', 'mi_tema_bnmm_setup');

function mi_tema_bnmm_scripts()
{
    wp_enqueue_style('mi-tema-estilos', 'https://framework-gb.cdn.gob.mx/gm/v3/assets/styles/main.css');    
    wp_enqueue_style('mi-tema-estilos', get_stylesheet_uri('assets/css/bnmm.css'));
    
    
}
add_action('wp_enqueue_scripts', 'mi_tema_bnmm_scripts');

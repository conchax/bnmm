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

/* function mi_tema_bnmm_scripts()
{
    wp_enqueue_style('mi-tema-estilos', 'https://framework-gb.cdn.gob.mx/gm/v3/assets/styles/main.css');    
    wp_enqueue_style('mi-tema-estilos', get_template_directory_uri() . "assets/css/bnmm.css");
}
add_action('wp_enqueue_scripts', 'mi_tema_bnmm_scripts');
 */


function mis_estilos_bnmm()
{
    // 1. Cargar el estilo externo del framework CDN
    wp_enqueue_style(
        'framework-gob-mx', // Nombre único para identificar el archivo
        'https://framework-gb.cdn.gob.mx/gm/v3/assets/styles/main.css', // URL del archivo
        array(), // Dependencias (si necesita que otra hoja cargue antes, si no, se deja vacío)
        '3.0' // Versión del archivo
    );

    // 2. Cargar el estilo local (assets/css/bnmm.css)
    wp_enqueue_style(
        'bnmm-estilos-locales', // Nombre único
        get_stylesheet_directory_uri() . '/assets/css/bnmm.css', // Ruta dinámica a tu tema actual
        array('framework-gob-mx'), // Esto asegura que cargue DESPUÉS del framework de arriba
        '1.0' // Versión
    );
}
// Le decimos a WordPress que ejecute esta función cuando cargue los estilos de la web
add_action('wp_enqueue_scripts', 'mis_estilos_bnmm');


function mi_tema_bnmm_footer()
{
    wp_enqueue_script("botstrap-js", "https://framework-gb.cdn.gob.mx/gm/v3/assets/js/gobmx.js");
}
add_action('wp_footer', 'mi_tema_bnmm_footer');

remove_filter('the_content', 'wpautop');

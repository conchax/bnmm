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

// remuebe etiquetas no desadas p y br de los contenidos de WordPress
remove_filter('the_content', 'wpautop');


add_filter('xmlrpc_enabled', '__return_false');

// Bloqueo total con respuesta 403 inmediata
if (defined('XMLRPC_REQUEST') && XMLRPC_REQUEST) {
    status_header(403);
    header('Content-Type: text/plain');
    die('Acceso denegado.');
}
//boquear WordPress REST API User Enumeration
add_filter( 'rest_endpoints', function( $endpoints ) {
    if ( ! is_user_logged_in() ) {
        unset( $endpoints['/wp/v2/users'] );
        unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
    }
    return $endpoints;
} );


function forzar_jquery_global_gobmx() {
    // Si jQuery está registrado, lo obligamos a liberar el signo $
    if (wp_script_is('jquery', 'registered')) {
        wp_add_inline_script('jquery-core', 'window.$ = jQuery;', 'after');
    }
}
add_action('wp_enqueue_scripts', 'forzar_jquery_global_gobmx', 1);
add_action('admin_enqueue_scripts', 'forzar_jquery_global_gobmx', 1);





function encolar_modal_auto_gobmx() {
    ?>
    <script type="text/javascript">
        window.addEventListener('load', function() {
            var verificarjQuery = setInterval(function() {
                if (typeof jQuery !== 'undefined' && typeof jQuery.fn.modal !== 'undefined') {
                    clearInterval(verificarjQuery);
                    
                    // 1. Abrimos el modal normalmente
                    jQuery('#aviso').modal('show');

                    // 2. SOLUCIÓN: Forzamos la acción de cierre al presionar el botón con data-dismiss
                    jQuery('#aviso').on('click', '[data-dismiss="modal"]', function() {
                        jQuery('#aviso').modal('hide');
                    });
                }
            }, 100);
        });
    </script>
    <?php
}
add_action('wp_footer', 'encolar_modal_auto_gobmx', 999);


/* function encolar_modal_auto_gobmx() {
    ?>
    <script type="text/javascript">
        window.addEventListener('load', function() {
            var verificarjQuery = setInterval(function() {
                if (typeof jQuery !== 'undefined' && typeof jQuery.fn.modal !== 'undefined') {
                    clearInterval(verificarjQuery);
                    
                    var $modal = jQuery('#videofull');
                    
                    // 1. Guardamos la URL original del iframe si existe
                    var $iframe = $modal.find('iframe');
                    var videoSrc = $iframe.attr('src');

                    // 2. Evento para DETENER el video cuando el modal termine de ocultarse
                    $modal.on('hidden.bs.modal', function () {
                        $iframe.attr('src', '');
                    });

                    // 3. Evento para REINTEGRAR el video si el modal se vuelve a abrir
                    $modal.on('show.bs.modal', function () {
                        if (videoSrc) {
                            $iframe.attr('src', videoSrc);
                        }
                    });

                    // 4. Abrimos el modal automáticamente
                    $modal.modal('show');
                }
            }, 100);
        });
    </script>
    <?php
}
add_action('wp_footer', 'encolar_modal_auto_gobmx', 999); */
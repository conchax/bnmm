<?php
if (! defined('ABSPATH')) {
    exit;
}
get_header(); ?>

<main class="contenedor contenido-error ancho-completo">
    <section class="error-404 text-center">
        <h1>Error 404: Página no encontrada</h1>
        <p>Lo sentimos, el contenido que buscas no existe o ha sido movido. Intenta realizando una búsqueda en nuestro sitio:</p>
        <div class="buscador-404">
            <?php get_search_form(); ?>
        </div>
        <p><a href="<?php echo esc_url(home_url('/')); ?>" class="boton-home">Regresar al Inicio</a></p>
    </section>
</main>

<?php get_footer(); ?>
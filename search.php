<?php
if (! defined('ABSPATH')) {
    exit;
}
get_header(); ?>

<main class="contenedor contenido-principal ancho-completo">
    <section class="resultados-busqueda">
        <h1>Resultados de búsqueda para: "<?php echo get_search_query(); ?>"</h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; else : ?>
            <p>No se encontraron resultados que coincidan con tu búsqueda. Intenta con palabras clave diferentes.</p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
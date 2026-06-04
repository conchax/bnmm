<?php
if (! defined('ABSPATH')) {
    exit;
}
get_header(); ?>

<main class="contenedor contenido-principal ancho-completo">
    <section class="pagina-estatica">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="imagen-destacada"><?php the_post_thumbnail('large'); ?></div>
                <?php endif; ?>

                <div class="contenido">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </section>
</main>

<?php get_footer(); ?>
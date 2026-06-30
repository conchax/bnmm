<?php
if (! defined('ABSPATH')) {
    exit;
}
get_header(); ?>

<main class="pages">
    <div class="container">
        <section class="pagina-estatica">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>     
                <article <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <div class="contenido">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; endif; ?>
        </section>
    </div>    
</main>

<?php get_footer(); ?>
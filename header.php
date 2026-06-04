<?php
if (! defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="sitio-header">
    <div class="contenedor">
        <div class="logo">
            <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>
        <nav class="navegacion-principal">
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'menu-principal',
                'container'      => false,
            )); 
            ?>
        </nav>
    </div>
</header>
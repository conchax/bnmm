<?php
if (! defined('ABSPATH')) {
    exit;
}
?>
<section class="footer-bnmm">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9 text-md-start text-center">
                <p class="d-inline-flex gap-4">                    
                    <a href="https://bnmm.sep.gob.mx/mesadeservicio/" target="_blank">Mesa de servicio</a> |
                    <a href="<?php echo esc_url(home_url('/mapa-del-sitio')); ?>">Mapa de sitio</a>
                </p>                
            </div>            
            <div class="col-md-3 text-md-end text-center">
                    <p class=" d-inline-flex gap-4">
                <a href="https://www.youtube.com/@soybnmm" target="_blank">
                    <svg width="24" height="24">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/svg/sprite-social.svg#ico-youtube"></use>
                    </svg>
                </a>
                <a href="https://www.facebook.com/people/Bachillerato-Nacional-Margarita-Maza/61593075034317/" target="_blank">
                    <svg width="24" height="24">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/svg/sprite-social.svg#ico-facebook"></use>
                    </svg>
                </a>
                <a href="https://www.instagram.com/soybnmm/" target="_blank">
                    <svg width="24" height="24">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/svg/sprite-social.svg#ico-instagram"></use>
                    </svg>
                </a>
                <a href="https://www.tiktok.com/@soybnmm" target="_blank">
                    <svg width="24" height="24">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/svg/sprite-social.svg#ico-tik-tok"></use>
                    </svg>
                </a>
                </p>

            </div>
        </div>
    </div>
</section>

<?php wp_footer(); ?>

</body>

</html>
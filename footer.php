<?php
if (! defined('ABSPATH')) {
    exit;
}
?>
<section class="footer-bnmm">
    <div class="container">
        <div class="row">
            <div class="col-md-5 d-flex justify-content-center justify-content-md-start">
                <p class="d-inline-flex gap-4">
                    <a href="#">Sigaprep</a> |
                    <a href="#">Mesa de servicio</a> |
                    <a href="<?php echo esc_url(home_url('/mapa-del-sitio')); ?>">Mapa de sitio</a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                </div>
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-2 d-flex justify-content-center justify-content-md-end"">
                    <p class=" d-inline-flex gap-4">
                <a href="#">
                    <svg width="24" height="24">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/svg/sprite-social.svg#ico-youtube"></use>
                    </svg>
                </a>
                <a href="#">
                    <svg width="24" height="24">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/svg/sprite-social.svg#ico-facebook"></use>
                    </svg>
                </a>
                <a href="#">
                    <svg width="24" height="24">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/svg/sprite-social.svg#ico-instagram"></use>
                    </svg>
                </a>
                <a href="#">
                    <svg width="24" height="24">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/svg/sprite-social.svg#ico-x"></use>
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
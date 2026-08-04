<?php
if (! defined('ABSPATH')) {
    exit;
}
get_header(); ?>
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slider-dgmm.css">

<main class="page">
    <div class="container">  
        <div id="carousel-banner-home" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel-banner-home" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel-banner-home" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel-banner-home" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel-banner-home" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">                        
                    <a href="<?php echo esc_url( site_url() ); ?>/inscripcion/"><img src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/07/08C.05_Banners_1.webp' ) ); ?>" class="d-block w-100" alt="inscripción"></a>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/07/08C.05_Banners_2.webp' ) ); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <a href="<?php echo esc_url( site_url() ); ?>/servicios-integrados/"><img src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/07/08C.05_Banners_3.webp' ) ); ?>" class="d-block w-100" alt="servicios integrados"></a>
                </div>
                <div class="carousel-item">
                    <a href="<?php echo esc_url( site_url() ); ?>/convocatorias-de-agentes-de-apoyo-educativo/"><img src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/07/09C.04_Banners_convocatoria_para_agentes.webp' ) ); ?>" class="d-block w-100" alt="Convocatorias de agentes educativos"></a>
                </div>
            </div>            
        </div>
    </div>
    <section carrusel>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div id="sequence" class="seq">
                        <div class="seq-screen">
                            <ul class="seq-canvas">  
                                <li>
                                    <div class="seq-model">
                                        <img data-seq src="<?php echo get_template_directory_uri(); ?>/assets/img/slider2.webp" alt="hola" />
                                    </div>

                                    <div class="seq-title">
                                        <h2 data-seq>¿Buscas un bachillerato diferente?<br><hr></h2>
                                        <h3 data-seq>Nuestro modelo combina el <b>estudio en línea con acompañamiento presencial</b>, y horarios que se adecúan a tu ritmo de vida.</h3>
                                        <div class="boton">
                                        <p><a href="<?php echo esc_url(home_url('/modelo-educativo')); ?>" class="btn btn-primary w-100">Modelo educativo </a></p>                            
                                        </div>
                                    </div>
                                </li>

                                <li class="seq-in">
                                    <div class="seq-model">
                                        <img data-seq src="<?php echo get_template_directory_uri(); ?>/assets/img/slider1.webp" alt="mm" />
                                    </div>

                                    <div class="seq-title text-center">
                                        <h2 data-seq>¿Y si terminas tu bachillerato? <br><hr></h2>            
                                        <h3 data-seq>Si tienes entre <b>15 y 19 años</b> puedes estudiar en el Bachillerato Nacional Margarita Maza.</h3>
                                        <div class="boton">
                                        <p><a href="<?php echo esc_url(home_url('/inscripcion')); ?>" class="btn btn-primary w-100">Inscripción </a></p>                            
                                        </div>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="seq-model">
                                        <img data-seq src="<?php echo get_template_directory_uri(); ?>/assets/img/slider3.webp" alt="slider 3" />
                                    </div>

                                    <div class="seq-title">
                                        <h2 data-seq>¿Quieres una formación integral?<br><hr></h2>
                                        <h3 data-seq>Desarrolla <b>habilidades académicas, culturales, deportivas y sociales</b> que te preparan para la vida.</h3>
                                        <div class="boton">
                                        <p><a href="<?php echo esc_url(home_url('/plan-de-estudios')); ?>" class="btn btn-primary w-100">Plan de estudios </a></p>                            
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="seq-model">
                                        <img data-seq src="<?php echo get_template_directory_uri(); ?>/assets/img/slider4.webp" alt="slider 3" />
                                    </div>

                                    <div class="seq-title">
                                        <h2 data-seq>¡Descubre tu talento!<br><hr></h2>
                                        <h3 data-seq>Participa en <b>talleres artísticos, actividades culturales</b> y espacios de expresión que enriquecen tu formación.</h3>
                                        <div class="boton">
                                        <p><a href="<?php echo esc_url(home_url('/cultura')); ?>" class="btn btn-primary w-100">Cultura </a></p>                            
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="seq-model">
                                        <img data-seq src="<?php echo get_template_directory_uri(); ?>/assets/img/slider5.webp" alt="slider 3" />
                                    </div>

                                    <div class="seq-title">
                                        <h2 data-seq>¿Buscas una beca para seguir estudiando?<br><hr></h2>
                                        <h3 data-seq>Obtén la <b>Beca Benito Juárez</b> que te ayudará a continuar tus estudios de bachillerato.</h3>
                                        <div class="boton">
                                        <p><a href="https://www.gob.mx/becasbenitojuarez" target="_blank" class="btn btn-primary w-100">Beca Benito Juárez </a></p>                           
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="seq-model">
                                        <img data-seq src="<?php echo get_template_directory_uri(); ?>/assets/img/slider6.webp" alt="slider 6" />
                                    </div>

                                    <div class="seq-title">
                                        <h2 data-seq>¡Vive la emoción del deporte!<br><hr></h2>
                                        <h3 data-seq>Participa en diversas actividades físicas, juega, compite y <b>comparte momentos</b> que te conectan con otros e impulsan tu disciplina.</h3>
                                        <div class="boton">
                                        <p><a href="<?php echo esc_url(home_url('/actividad-fisica-y-deportiva')); ?>" class="btn btn-primary w-100">Actividad física y deportiva </a></p>                            
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="seq-model">
                                        <img data-seq src="<?php echo get_template_directory_uri(); ?>/assets/img/slider7.webp" alt="slider 7" />
                                    </div>

                                    <div class="seq-title text-center">
                                        <h2 data-seq>Haz la diferencia<br><hr></h2>
                                        <h3 data-seq>Accede a <b>cursos, pláticas y talleres virtuales</b> que impulsan tu formación, desarrollan tu liderazgo y fortalecen tu compromiso con la comunidad.</h3>
                                        <div class="boton">
                                        <p><a href="<?php echo esc_url(home_url('/servicios-integrados')); ?>" class="btn btn-primary w-100">Servicios integrados</a></p>                            
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                            <button type="button" class="seq-prev" aria-label="Previous">Previous</button>
                            <button type="button" class="seq-next" aria-label="Next">Next</button>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Ubica tu plantel y da el primer paso</h2>
                    <p class="text-center"><b>Nota</b>: No contamos con planteles en la CDMX.</p>
                </div>
                <div class="col-12">
                    <?php echo do_shortcode('[planteles_bachillerato limit="50"]'); ?>
                </div>
            </div>
        </div>
    </section>

</main> 

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/hammer.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sequence.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/carrusel.js"></script>

<?php get_footer(); ?>
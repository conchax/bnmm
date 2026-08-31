<?php
if (! defined('ABSPATH')) {
    exit;
}
get_header(); ?>
<style>
    .l-vert {
    border-right: 1px solid #d1d1d1;
    }
@media (max-width: 767.98px) {
    .l-vert {
        border-right: 0px;
    }
}
</style>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slider-dgmm.css">

<main class="page">
    <div class="container">  
        <div id="carousel-banner-home" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel-banner-home" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel-banner-home" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel-banner-home" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel-banner-home" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carousel-banner-home" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <a href="#"><img src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/08/Banner-Escritorio_-Segundo-Informe-scaled.webp' ) ); ?>" class="d-block w-100" alt="Segundo informe de gobierno"></a>
                </div>
                <div class="carousel-item active">                        
                    <a href="<?php echo esc_url( site_url() ); ?>/inscripcion/">
                    <img src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/07/08C.05_Banners_1.webp' ) ); ?>" class="d-block w-100" alt="inscripción">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="https://www.facebook.com/people/Bachillerato-Nacional-Margarita-Maza/61593075034317/" target="_blank">
                    <img src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/07/08C.05_Banners_2.webp' ) ); ?>" class="d-block w-100" alt="Conecta">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="<?php echo esc_url( site_url() ); ?>/servicios-integrados/"><img src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/07/08C.05_Banners_3.webp' ) ); ?>" class="d-block w-100" alt="servicios integrados"></a>
                </div>
                <div class="carousel-item">
                    <a href="<?php echo esc_url( site_url() ); ?>/convocatoria-de-guias-y-promotorias-en-plantel/"><img src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/08/09C.04-Banner_ampliacion_para_agentes-5-sep.webp' ) ); ?>" class="d-block w-100" alt="Convocatorias de agentes de apoyo educativo"></a>
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
                                        <h3 data-seq>Nuestro modelo combina el <b>acompañamiento presencial con el estudio en la plataforma educativa</b>, y horarios que se adecúan a tu ritmo de vida.</h3>
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
                                        <h3 data-seq>Si tienes hasta <b>19 años</b> puedes estudiar en el Bachillerato Nacional Margarita Maza.</h3>
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

    <section class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 ">
                <h2>Estamos para ayudarte</h2>                
            </div>
            <div class="col-md-5 text-center l-vert">
                <svg width="39" height="35" viewBox="0 0 39 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.594 7.90757L11.9316 1.81515C11.291 0.350449 9.44932 -0.377407 7.81784 0.197689C7.60765 0.269576 7.40747 0.359435 7.22731 0.476252C5.27554 1.63543 3.27373 3.0552 1.72232 4.37612C0.431152 5.46341 -0.18941 7.04493 0.0508071 8.61746C0.891568 14.3774 4.63496 20.6136 10.3301 25.7266C16.0253 30.8395 22.9716 34.2092 29.3874 34.9551C29.6376 34.982 29.8978 35 30.1481 35C31.6494 35 33.0307 34.4608 34.1016 33.4544C35.573 32.0616 37.1644 30.2644 38.4456 28.5122C39.4165 27.2003 39.0161 25.43 37.5548 24.5584C37.3646 24.4506 37.1744 24.3517 36.9642 24.2798L30.1781 21.8896C29.0771 21.4942 27.8159 21.6829 26.9352 22.3928L24.7332 24.1181C19.3783 21.7189 14.7841 17.5944 12.1117 12.7869L14.0335 10.81C14.8242 10.0103 15.0344 8.88703 14.594 7.89859V7.90757ZM29.2973 23.9384L36.0834 26.3286C36.4638 26.4634 36.654 26.8498 36.5038 27.1913C36.4838 27.2362 36.4638 27.2721 36.4338 27.3171C36.3337 27.4519 36.2336 27.5777 36.1335 27.7125C33.1708 27.0475 30.3182 26.059 27.6258 24.7741L28.5366 24.0552C28.7368 23.8845 29.0371 23.8395 29.2973 23.9384ZM15.695 20.9191C18.0271 23.0218 20.7295 24.7741 23.6822 26.095C24.2427 26.3466 24.9033 26.3915 25.5039 26.2118C28.3664 27.6765 31.4192 28.8177 34.5921 29.6085C33.8514 30.4531 33.0907 31.2619 32.3601 31.9538C31.6895 32.6098 30.6986 32.9243 29.7277 32.7895C17.3365 31.3427 4.10448 19.4544 2.48301 8.32991C2.33287 7.44929 2.68319 6.55969 3.41385 5.96662C4.18455 5.31065 5.07536 4.61874 6.02622 3.95379C6.90702 6.80231 8.17817 9.543 9.80964 12.113C9.60946 12.6521 9.65951 13.2362 9.93976 13.7484C11.4211 16.3992 13.3629 18.8254 15.705 20.9191H15.695ZM12.2018 9.38126L11.4011 10.199C9.96979 7.78177 8.86879 5.2208 8.12812 2.56098C8.27826 2.47112 8.41838 2.38126 8.56852 2.2914C8.67862 2.21951 8.81875 2.17458 8.95887 2.17458C9.03895 2.17458 9.11902 2.18357 9.19909 2.21053C9.41929 2.26444 9.58944 2.40822 9.66952 2.59692L12.3319 8.68935C12.442 8.92298 12.392 9.18357 12.2018 9.37227V9.38126ZM29.5475 0C24.3328 0 20.109 3.79204 20.109 8.47368C20.109 10.2978 20.7596 12.068 21.9707 13.5327V17.4056C21.9707 18.0077 22.5212 18.5019 23.1918 18.5019C23.402 18.5019 23.6121 18.448 23.8023 18.3582L27.0753 16.6598C32.1098 17.8909 37.2945 15.2221 38.6658 10.7022C40.037 6.18228 37.0643 1.5276 32.0298 0.296534C31.219 0.0988447 30.3883 0 29.5475 0ZM29.5475 14.7638C28.7868 14.7638 28.0261 14.656 27.3055 14.4403C26.9752 14.3415 26.6149 14.3684 26.3046 14.5302L24.4029 15.5186V13.1643C24.4029 12.9127 24.3028 12.6701 24.1226 12.4724C21.6704 9.78562 22.1108 5.82285 25.0935 3.62131C28.0862 1.41977 32.5002 1.81515 34.9524 4.49294C37.4046 7.17972 36.9642 11.1425 33.9815 13.344C32.7304 14.2696 31.159 14.7728 29.5375 14.7728L29.5475 14.7638ZM30.7886 8.53659C30.7886 9.13864 30.2381 9.63286 29.5675 9.63286H29.5275C28.8569 9.63286 28.3064 9.13864 28.3064 8.53659C28.3064 7.93453 28.8569 7.44031 29.5275 7.44031H29.5675C30.2381 7.44031 30.7886 7.93453 30.7886 8.53659ZM27.1353 8.53659C27.1353 9.13864 26.5848 9.63286 25.9142 9.63286H25.8742C25.2036 9.63286 24.6531 9.13864 24.6531 8.53659C24.6531 7.93453 25.2036 7.44031 25.8742 7.44031H25.9142C26.5848 7.44031 27.1353 7.93453 27.1353 8.53659ZM34.442 8.53659C34.442 9.13864 33.8915 9.63286 33.2208 9.63286H33.1808C32.5102 9.63286 31.9597 9.13864 31.9597 8.53659C31.9597 7.93453 32.5102 7.44031 33.1808 7.44031H33.2208C33.8915 7.44031 34.442 7.93453 34.442 8.53659Z" fill="#A78634"/>
                </svg>
                <p class="mt-4"><b>Teléfono:</b> 55 3601 6900 <br><b>Ext.:</b> 50794, 50798, 55451, 64417 y 64418</p>                
            </div>
            <div class="col-md-5 text-center">
                <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.48 0C8.76 0 0 8.76 0 19.48C0 30.2 8.76 38.96 19.48 38.96C30.2 38.96 38.96 30.2 38.96 19.48C38.96 8.76 30.19 0 19.48 0ZM19.48 35.06C10.91 35.06 3.9 28.05 3.9 19.48C3.9 10.91 10.91 3.9 19.48 3.9C28.05 3.9 35.06 10.91 35.06 19.48C35.06 28.05 28.05 35.06 19.48 35.06Z" fill="#A78634"/>
                    <path d="M19.48 9.73996C20.45 9.73996 21.43 8.95996 21.43 7.78996C21.43 7.00996 20.85 6.22996 20.26 6.03996C18.9 5.45996 17.53 6.42996 17.53 7.78996C17.53 8.75996 18.5 9.73996 19.48 9.73996Z" fill="#A78634"/>
                    <path d="M19.87 29.2199C18.51 29.0299 17.53 29.9999 17.53 31.1699C17.53 32.1399 18.5 33.1199 19.48 33.1199C20.46 33.1199 21.43 32.3399 21.43 31.1699C21.43 30.1999 20.65 29.4199 19.87 29.2199Z" fill="#A78634"/>
                    <path d="M30.38 17.72C29.8 17.91 29.21 18.69 29.21 19.47C29.21 20.44 30.18 21.42 31.16 21.42C32.14 21.42 33.11 20.64 33.11 19.47C33.11 17.91 31.55 17.13 30.38 17.72Z" fill="#A78634"/>
                    <path d="M7.01003 17.72C6.43003 17.91 5.84003 18.69 5.84003 19.47C5.84003 20.44 6.81003 21.42 7.79003 21.42C9.15003 21.42 10.13 20.06 9.54003 18.69C9.15003 17.72 7.98003 17.33 7.01003 17.72Z" fill="#A78634"/>
                    <path d="M21.43 18.6999V13.6399C21.43 12.4699 20.65 11.6899 19.48 11.6899C18.31 11.6899 17.53 12.4699 17.53 13.6399V19.4799C17.53 20.0599 17.72 20.4499 18.11 20.8399L23.76 26.4899C24.15 26.8799 24.73 27.0699 25.12 27.0699C25.51 27.0699 26.09 26.8799 26.48 26.4899C27.26 25.7099 27.26 24.5399 26.48 23.7599L21.42 18.6999H21.43Z" fill="#A78634"/>
                </svg>
                <p class="mt-4"><b>Horario de atención:</b><br>lunes a viernes de 8:30 a 17:00</p>                
            </div>
        </div>
    </section>

    <section>
        <div class="container d-none">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Ubica tu plantel y da el primer paso</h2>
                    <p class="text-center"><b>Nota</b>: No contamos con planteles en la CDMX.</p>
                </div>
                <div class="col-12">
                    <?php /* echo do_shortcode('[planteles_bachillerato limit="50"]'); */ ?>
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
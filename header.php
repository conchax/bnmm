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

<nav class="navmm navbar navbar-expand-lg bg-light sub-navbar fixed-top">
    <div class="container">            
        <a class="navbar-brand sub-navbar" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-bnmm.svg"></a>
        <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#subNavBarDropdown"
        aria-controls="subNavBarDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="subNavBarDropdown">
            <ul class=" des navbar-nav"> 
                <li class="nav-item">
                <a class="nav-link subnav-link" aria-current="page" href="#">Mi aula virtual</a>
                </li>
                <li class="nav-item">
                <a class="nav-link subnav-link" href="#">Preguntas frecuentes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link subnav-link" href="#">Transparencia</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg width="25" height="21" viewBox="0 0 25 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.75 0H0V2.0625H24.75V0Z" fill="#717171"/>
                    <path d="M24.75 18.5625H0V20.625H24.75V18.5625Z" fill="#717171"/>
                    <path d="M24.75 6.1875H0V8.25H24.75V6.1875Z" fill="#717171"/>
                    <path d="M24.75 12.375H0V14.4375H24.75V12.375Z" fill="#717171"/>
                    </svg>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">¿Quiénes somos?</a></li>
                    <li><a class="dropdown-item" href="#">Modelo educativo</a></li>
                    <li><a class="dropdown-item" href="#">Plan de estudios</a></li>
                    <li><a class="dropdown-item" href="#">Servicios integrados</a></li>
                    <li><a class="dropdown-item" href="#">Cultura y deporte</a></li>
                    <li><a class="dropdown-item" href="#">Continuidad académica</a></li>
                    <li><a class="dropdown-item" href="#">Calendario</a></li>
                    <li><a class="dropdown-item" href="#">Prensa</a></li>                        
                </ul>
                </li>
            </ul>
            <ul class="navbar-nav mov">
                <li class="nav-item">
                <a class="nav-link subnav-link" aria-current="page" href="#">Mi aula virtual</a>
                </li>
                <li class="nav-item">
                <a class="nav-link subnav-link" href="#">Preguntas frecuentes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link subnav-link" href="#">Transparencia</a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li class="nav-item"><a class="nav-link subnav-link" href="#">¿Quiénes somos?</a></li>
                <li class="nav-item"><a class="nav-link subnav-link" href="#">Modelo educativo</a></li>
                <li class="nav-item"><a class="nav-link subnav-link" href="#">Plan de estudios</a></li>
                <li class="nav-item"><a class="nav-link subnav-link" href="#">Servicios integrados</a></li>
                <li class="nav-item"><a class="nav-link subnav-link" href="#">Cultura y deporte</a></li>
                <li class="nav-item"><a class="nav-link subnav-link" href="#">Continuidad académica</a></li>
                <li class="nav-item"><a class="nav-link subnav-link" href="#">Calendario</a></li>
                <li class="nav-item"><a class="nav-link subnav-link" href="#">Prensa</a></li>         
            </ul>
            
        </div>
    </div>
</nav>
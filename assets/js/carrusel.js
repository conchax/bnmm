document.addEventListener("DOMContentLoaded", function() {
    var intervalTime = 8000; 
    var carousel = document.querySelector('#carousel-banner-home');
    if (!carousel) return;

    var timer = null;

    function startAutoSlide() {
        if (timer) return; // Evita duplicar intervalos
        timer = setInterval(runSlide, intervalTime);
    }

    function stopAutoSlide() {
        if (timer) {
            clearInterval(timer);
            timer = null;
        }
    }

    function runSlide() {
        var items = carousel.querySelectorAll('.carousel-item');
        var indicators = carousel.querySelectorAll('.carousel-indicators button');
        if (items.length <= 1) return;

        // 1. Encontrar el elemento actual activo
        var activeItem = carousel.querySelector('.carousel-item.active');
        var currentIndex = Array.from(items).indexOf(activeItem);
        if (currentIndex === -1) currentIndex = 0;
        
        // 2. Calcular la posición del siguiente elemento
        var nextIndex = (currentIndex + 1) % items.length;
        var nextItem = items[nextIndex];

        // 3. Simular ciclo de animación nativo (Slide)
        nextItem.classList.add('carousel-item-next');
        
        // Forzar reflow para registrar el estado inicial
        nextItem.offsetWidth; 

        // Aplicar la dirección del movimiento
        activeItem.classList.add('carousel-item-start');
        nextItem.classList.add('carousel-item-start');

        // 4. Limpieza de clases tras terminar los 600ms de CSS
        setTimeout(function() {
            activeItem.classList.remove('active', 'carousel-item-start');
            nextItem.classList.remove('carousel-item-next', 'carousel-item-start');
            nextItem.classList.add('active');
        }, 600);

        // 5. Actualizar los indicadores
        if (indicators.length > 0) {
            indicators.forEach(function(btn) { 
                btn.classList.remove('active');
                btn.removeAttribute('aria-current');
            });
            indicators[nextIndex].classList.add('active');
            indicators[nextIndex].setAttribute('aria-current', 'true');
        }
    }

    // Eventos para pausar y reanudar limpiando el temporizador
    carousel.addEventListener('mouseenter', stopAutoSlide);
    carousel.addEventListener('mouseleave', startAutoSlide);

    // Iniciar el carrusel al cargar
    startAutoSlide();
});
// Get the Sequence element
//var sequenceElement = document.getElementById("sequence");

// Place your Sequence options here to override defaults
// See: http://sequencejs.com/documentation/#options
/* var options = {
  animateCanvas: false,
  phaseThreshold: false,
  preloader: true,
  reverseWhenNavigatingBackwards: true
}
 */
// Launch Sequence on the element, and with the options we specified above
//var mySequence = sequence(sequenceElement, options);

document.addEventListener("DOMContentLoaded", function() {
    // 1. Selecciona el contenedor de tu slider
    var sequenceElement = document.getElementById("sequence");

    // 2. Define las opciones de configuración
    var options = {
        autoPlay: true,             // <-- ESTO ACTIVA EL SLIDER AUTOMÁTICO
        autoPlayInterval: 7000,     // Tiempo en milisegundos entre cada diapositiva (3 segundos)
        //autoPlayDelay: 1000,        // (Opcional) Retraso antes de que empiece la primera animación
        cycle: true,                // Permite que al llegar al final regrese al inicio infinitamente
        animateStartingFrameIn: true
    };

    // 3. Inicializa Sequence.js con las nuevas opciones
    var mySequence = sequence(sequenceElement, options);
});
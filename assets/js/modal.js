(function() {
    var checkGmx = setInterval(function() {
        if (typeof $gmx !== 'undefined') {
            clearInterval(checkGmx);
            
            // Ejecución segura del modal con gob.mx v3
            $gmx(document).ready(function() {
                $gmx("#aviso").modal('show');
            });
        }
    }, 100);

    // Cancelar tras 5 segundos si no se encuentra la librería
    setTimeout(function() { clearInterval(checkGmx); }, 5000);
})();
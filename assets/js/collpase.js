
document.addEventListener('DOMContentLoaded', function () {
  // 1. Seleccionamos todos los contenedores colapsables
  const colapsables = document.querySelectorAll('.collapse');

  colapsables.forEach(function (elemento) {
    // 2. Escuchamos el evento 'show.bs.collapse' (se activa justo al hacer clic para abrirlo)
    elemento.addEventListener('show.bs.collapse', function () {
      
      // 3. Buscamos si hay algún OTRO colapsable que ya tenga la clase 'show' (abierto)
      colapsables.forEach(function (otroElemento) {
        if (otroElemento !== elemento && otroElemento.classList.contains('show')) {
          
          // 4. Obtenemos la instancia de Bootstrap de ese elemento abierto y lo cerramos
          const instanciaBootstrap = bootstrap.Collapse.getInstance(otroElemento) 
                                   || new bootstrap.Collapse(otroElemento, { toggle: false });
          
          instanciaBootstrap.hide();
        }
      });

    });
  });
});

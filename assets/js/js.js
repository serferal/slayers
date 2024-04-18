
function cargarContenido(url) {
    const contenidoPrincipal = document.getElementById('contenidoPrincipal');
    const xhr = new XMLHttpRequest();
    xhr.open('GET', url);
    xhr.onload = function() {
        if (xhr.status === 200) {
            contenidoPrincipal.innerHTML = xhr.responseText;
        } else {
            contenidoPrincipal.innerHTML = 'Error al cargar el contenido.';
        }
    };
    xhr.onerror = function() {
        contenidoPrincipal.innerHTML = 'Error al cargar el contenido.';
    };
    xhr.send();
}

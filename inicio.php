<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la Página</title>
    <link rel="stylesheet" href="./assets/css/inicio.css"> <!-- Enlace a tu archivo de estilos CSS -->
    
</head>
<body>

    <!-- Encabezado -->
    <header>
        <h1>Slayers</h1>
    </header>

    <!-- imagen de inicio -->
    <nav class="contenedor-imagen">
        <img src="./assets/img/inicio.jpg" alt="Imagen de inicio" class="centrada">
    </nav>



    <!-- Contenido Principal -->
    <main> 
    <table class="vertical">
        <tbody>
            <tr>
                 <td class="destacado">
                    <a href="#">
                        <img src="./assets/img/animacion.png" alt="Imagen 1">
                        <span class="texto-imagen">Inicio</span>
                    </a>
                </td>
            </tr>
            <tr>
                <td class="destacado">
                    <a href="#">
                        <img src="./assets/img/mundo.png" alt="Imagen 1">
                        <span class="texto-imagen">Universo</span>
                    </a>
                </td>
            </tr>
            <tr>
                <td class="destacado">
                    <a href="#">
                        <img src="./assets/img/th.jpg" alt="Imagen 1">
                        <span class="texto-imagen">Personajes</span>
                    </a>
                </td>
            </tr>
            <tr>
                <td class="destacado">
                    <a href="#">
                        <img src="./assets/img/oip.jpg" alt="Imagen 1">
                        <span class="texto-imagen">Serie</span>
                    </a>
                </td>
            </tr>
            <tr>
                <td class="destacado">
                    <a href="#">
                        <img src="./assets/img/publicaciones.png" alt="Imagen 1">
                        <span class="texto-imagen">publicaciones</span>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
    <p>Contenido de la página...</p>
</main>



    <!-- Pie de Página -->
    <footer>
        <p>Derechos de Autor &copy; <?php echo date('Y'); ?> Tu Empresa</p>
    </footer>

</body>
</html>

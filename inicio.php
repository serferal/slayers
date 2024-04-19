<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la Página</title>
    <link rel="stylesheet" href="./assets/css/inicio.css"> <!-- Enlace a tu archivo de estilos CSS -->
    <script src="assets/js/js.js"></script>

</head>

<body>

    <!-- Encabezado -->
    <header>
        <h1>Slayers</h1>
        <!-- imagen de inicio -->
        <nav class="contenedor-imagen">
            <img src="./assets/img/slay.jpg" alt="Imagen de inicio" class="centrada">
        </nav>
    </header>





    <!-- Contenido Principal -->
    <main class="Reparticion">
        <table class="vertical">
            <tbody>
                <tr>
                    <td class="destacado">
                        <a href="inicio.php">
                            <img src="./assets/img/animacion.png" alt="Imagen 1">
                            <span class="texto-imagen">Inicio</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="destacado">
                        <a href="#" onclick="cargarContenido('Universo.php')" class="texto-imagen">Universo</a></li>
                        <img src="./assets/img/mundo.png" alt="Imagen 1">

                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="destacado">
                        <a href="#" onclick="cargarContenido('personajes.php')" class="texto-imagen">Personajes</a></li>
                        <img src="./assets/img/th.jpg" alt="Imagen 1">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="destacado">
                        <a href="#" onclick="cargarContenido('./series/series.php')" class="texto-imagen">Serie</a></li>
                        <img src="./assets/img/oip.jpg" alt="Imagen 1">
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
        <div id="contenidoPrincipal" class="contenido">
            <h3 class="margen_texto">Introduccion</h3>
            <p class="margen_contenido">Slayers (スレイヤーズ sureiyāzu?) es una serie de novelas, mangas y animes cómicos del género espada y hechicería, creación de Hajime Kanzaka. Las diversas encarnaciones de la franquicia se enfocan en la hechicera adolescente Lina Inverse y sus diferentes compañeros a medida que viajan a través de su mundo en la búsqueda de diversos artículos y objetivos.

                Mientras que es generalmente considerada como una comedia, cada incursión tiene una trama general seria más grande que pone a muchos de los personajes principales en peligros que deben superar, con cada trama argumental por lo general culminando en una batalla de proporciones épicas que decidirá el destino del mundo.</p>
            <img class="margen_imagen" src="./assets/img/Slayers_treasure.webp" alt="">
        </div>
    </main>


    <!-- Pie de Página -->
    <footer>
        <p>Derechos de Autor &copy; <?php echo date('Y'); ?> Slayers</p>
    </footer>

</body>

</html>
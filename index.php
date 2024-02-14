<?php
    // index.php
    // Controlador Frontal
    /**
     * Con index.php como controlador frontal
     * /index.php       => (ejecuta index.php) la página que lista los artículos.
     * /index.php/detalle  => (ejecuta index.php) la página que muestra un artículo específico.
     */
    define('CON_CONTROLADOR', true);

    require_once 'controladores.php';

    // Encamina la petición internamente
    $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    if ($uri == 'index.php') {
        lista_noticias();
    } elseif ($uri == 'index.php/detalle' && isset($_GET['id'])) {
        detalle_noticia($_GET['id']);
    } else {
        header("HTTP/1.0 404 Not Found");
        echo '<html><body><h1>Página no encontrada</h1></body></html>';
    }
?>
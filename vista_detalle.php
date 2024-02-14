<!-- vista_detalle.php -->
<!-- MVC Controlador Frontal: Vista -->
<?php
    if (!defined('CON_CONTROLADOR')) {
        echo "Acceso restringido. No se puede llamar a este archivo directamente.";
        die();
    }
?>
<html>
    <head>
        <title>Ejemplo MVC - Controlador Frontal</title>
    </head>
    <body>
        <h3>Detalle de la noticia - DWES</h3>
        <?php echo $noticia['titulo'] ?>
    </body>
</html>

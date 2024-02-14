<!-- vista_listar.php -->
<!-- MVC Controlador Frontal: Vista -->
<?php
    if (!defined('CON_CONTROLADOR')) {
        echo "Acceso restringido. No se puede llamar a este archivo directamente.";
        die();
    }
?>
<html>
    <head>
        <title>Ejemplo MVC</title>
    </head>
    <body>
        <h3>Listado de noticias - DWES</h3>
        <ul>
        <!-- Mostramos una lista de los artículos -->
        <?php foreach($noticias as $noticia) { ?>
            <li>
                <a href="index.php/detalle?id=<?php echo $noticia['id'] ?>" >
                    <?php echo $noticia['titulo'] ?>
                </a>
            </li>
        <?php } ?>
        <br>
        <br>    
        <?php
        echo '<form action="/tutoria_colectiva2/tarea5/index.php" method="POST">';
            foreach ($formulario as $campo):
                echo $campo[0].'<input type="'.$campo[1].'",
                                 name="'.$campo[2].'", value="'.$campo[3].'">';
                echo '<br>';
            endforeach;
        echo '</form>';
        ?>
        <?php
            if (isset($nombre) && isset($comentario)) {
                echo "Comentario introducido: " . "<br>";
                echo "$comentario ($nombre)";
            }
        
        ?>
        
        </ul>
    </body>
</html>

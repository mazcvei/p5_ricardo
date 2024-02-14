<?php
    // controladores.php
    // MVC Controlador Frontal: Controlador
    require_once 'modelo.php';

    function lista_noticias() {
        if (isset($_POST['nombre']) && isset($_POST['comentario'])){
            $nombre = $_POST['nombre'];
            $comentario = $_POST['comentario'];
        }
        
        $formulario = array(
            // Patrón ('label', 'type', 'name', 'value')
            array('Nombre: ', 'text', 'nombre', ''),
            array('Comentario: ', 'textarea', 'comentario', ''),
            array('', 'submit', 'comentar', 'Comentar')
        );
        $noticias = listar_noticias();
        require 'vista_listar.php';
    }

    function detalle_noticia($id) {

        // Obtener detalles de la noticia desde el modelo
        $noticia = detalle_noticias($id);

        // Cargar la vista para mostrar los detalles de la noticia
        require 'vista_detalle.php';
    }
?>

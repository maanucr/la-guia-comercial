<?php

    require_once '../conexion.php';

    // DELETE
    $deleteNeg = "DELETE FROM negocios WHERE negocio_id ORDER BY negocio_id DESC LIMIT 1";
    $delete = mysqli_query($conexion, $deleteNeg);

    // Resultado
    if($delete) {

        echo " <script> alert('¡Tu negocio ha sido eliminado! Vas a ser redirigido a la página principal para cargar otro negocio.');
        window.location = '../index.php'; </script>";

    }

?>
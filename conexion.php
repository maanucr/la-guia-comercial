<?php

    // Conectar a BBDD
    $conexion = mysqli_connect("localhost", "root", "", "guia-comercial-v2");

    // Por si no se logra conectar a la BBDD
    if(mysqli_connect_errno()) {
        echo "Error al conectar a la BBDD" . "<hr>";
    } /* else {
        echo "Conexión exitosa" . "<hr>";
    } */

?>
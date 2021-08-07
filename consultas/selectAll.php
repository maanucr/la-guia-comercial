<?php

    // SELECT
    $selectGuia = "SELECT * FROM negocios JOIN usuarios WHERE negocio_id = id_negocio";
    $select = mysqli_query($conexion, $selectGuia);

?>
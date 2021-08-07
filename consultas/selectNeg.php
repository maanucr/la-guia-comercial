<?php

    // SELECT
    $selectNeg = "SELECT * FROM negocios ORDER BY negocio_id DESC LIMIT 1";
    $select = mysqli_query($conexion, $selectNeg);

?>
<?php

    require_once '../conexion.php';

    // Datos del form de negocios
    $nomNegocio = $_POST['nom_neg'];
    $catNegocio = $_POST['cat_neg'];
    $dirNegocio = $_POST['dir_neg'];
    $telNegocio = $_POST['tel_neg'];
    $mailNegocio = $_POST['mail_neg'];
    $webNegocio = $_POST['web_neg'];

    // UPDATE
    $modificar = "UPDATE negocios SET nom_negocio = '$nomNegocio', cat_negocio = '$catNegocio', direc_negocio = '$dirNegocio', tel_negocio = $telNegocio, mail_negocio = '$mailNegocio', web_negocio = '$webNegocio' ORDER BY negocio_id DESC LIMIT 1";
    $update = mysqli_query($conexion, $modificar);

    // Resultado
    if($update) {

        echo " <script> alert('¡Tu negocio ha sido modificado!');
        window.location = '../vistaPreviaNeg.php'; </script>";
        
    }

?>
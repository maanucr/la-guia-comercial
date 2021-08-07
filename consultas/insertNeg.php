<?php

    require_once '../conexion.php';

    // Datos del form de negocios
    $nomNegocio = $_POST['nom_neg'];
    $catNegocio = $_POST['cat_neg'];
    $dirNegocio = $_POST['dir_neg'];
    $telNegocio = $_POST['tel_neg'];
    $mailNegocio = $_POST['mail_neg'];
    $webNegocio = $_POST['web_neg'];

    // INSERT
    $nuevoNeg = "INSERT INTO `negocios`(`negocio_id`, `nom_negocio`, `cat_negocio`, `direc_negocio`, `tel_negocio`, `mail_negocio`, `web_negocio`) VALUES (null,'$nomNegocio','$catNegocio','$dirNegocio',$telNegocio,'$mailNegocio','$webNegocio')";
    $insertNeg = mysqli_query($conexion, $nuevoNeg);

    // Resultado
    if($insertNeg) {

        echo " <script> alert('¡Tu negocio se subió exitosamente!');
        window.location = '../vistaPreviaNeg.php'; </script>";

    }

?>
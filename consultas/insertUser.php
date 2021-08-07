<?php

    require_once '../conexion.php';

    // Datos del FORM del dueño del negocio
    $nomUser = $_POST['nom_user'];
    $dniUser = $_POST['dni_user'];
    $mailUser = $_POST['mail_user'];
    $passUser = $_POST['pass_user'];

    // INSERT
    $insertUser = "INSERT INTO usuarios(id_usuario, nom_usuario, dni_usuario, mail_usuario, pass_usuario, id_negocio) VALUES (null,'$nomUser',$dniUser,'$mailUser','$passUser', (SELECT negocio_id FROM negocios ORDER BY negocio_id DESC LIMIT 1))";
    $insert = mysqli_query($conexion, $insertUser);

    // Resultado
    if($insert) {

        echo " <script> alert('¡Ya estás registrado junto a tu negocio en La Guía Comercial!');
        window.location = '../guiacomercial.php'; </script>";

    }

?>
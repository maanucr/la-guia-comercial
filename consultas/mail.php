<?php

    $nomContacto = $_POST['nom_user'];
    $mailContacto = $_POST['mail_user'];

    $asunto = "¡Su consulta a La Guía Comercial ha sido registrada con éxito, " . $nomContacto . "!";
    $remitente = "From: laguiacomercial@gmail.com";
    $cuerpoMail = "Gracias por contactarse con nosotros, le estaremos contestando a la brevedad. <br> - La Guía Comercial.";

    $envioConsulta = mail('$mailContacto', '$asunto', '$cuerpoMail', '$remitente');

    if($envioConsulta) {

        echo " <script> alert('¡Gracias por enviar tu consulta! Te contestaremos a la brevedad.');
        window.location = '../index.php'; </script>";

    }

?>
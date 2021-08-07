<?php

    require_once 'conexion.php';
    require_once 'html/head.php';

?>

<main>

    <h2 id="contacto">Si tenés alguna duda o consulta sobre la página, su funcionamiento o incluso el curso<br>en el cual fue desarrollada la misma, poné tus datos y contestaremos a la brevedad.</h2>

    <div class="form-container">

        <form action="consultas/mail.php" method="POST" id="formMsj">

            <label>Nombre y apellido</label>
            <input type="text" name="nom_user"> <br>

            <label>E-mail</label>
            <input type="text" name="mail_user"> <br>

            <label>Mensaje</label>
            <textarea name="msj_user" cols="30" rows="10"></textarea> <br>

            <button type="reset" id="reset">Borrar el formulario</button>
            <button type="submit" id="submit">Enviar la consulta</button>

        </form>

    </div>

</main>

<?php

    require_once 'html/footer.php';

?>
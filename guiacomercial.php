<?php

    require_once 'conexion.php';
    require_once 'html/head.php';

?>

    <main>

        <h2 id="tit-guiaCom">A continuación te presentamos la afamada guía que nos da el nombre<br>para que puedas ver tu emprendimiento... ¡Junto a los de los demás!</h2>

        <div class="flex">
            <button onclick=mostrarDueños(); id="mostrarDueños" value="false">Mostrar dueños</button>
        </div>

        <div class="guiaCom">

            <table id="tabla-guia">

                <tr>
                    <th>Nombre del negocio</th>
                    <th>Categoría</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>E-mail</th>
                    <th>Web</th>
                    <th class="dueños">Nombre de lx dueñx</th>
                    <th class="dueños">DNI</th>
                    <th class="dueños">E-mail particular</th>
                </tr>

                <?php require_once 'consultas/selectAll.php';
                while($guiaComercial = mysqli_fetch_array($select)) { ?>

                    <tr>

                        <td> <?php echo $guiaComercial['nom_negocio']; ?> </td>
                        <td> <?php echo $guiaComercial['cat_negocio']; ?> </td>
                        <td> <?php echo $guiaComercial['direc_negocio']; ?> </td>
                        <td> <?php echo $guiaComercial['tel_negocio']; ?> </td>
                        <td> <?php echo $guiaComercial['mail_negocio']; ?> </td>
                        <td> <?php echo $guiaComercial['web_negocio']; ?> </td>
                        <td class="dueños"> <?php echo $guiaComercial['nom_usuario']; ?> </td>
                        <td class="dueños"> <?php echo $guiaComercial['dni_usuario']; ?> </td>
                        <td class="dueños"> <?php echo $guiaComercial['mail_usuario']; ?> </td>

                    </tr>

                <?php } ?>

            </table>

        </div>

    </main>

    <?php

        require_once 'js/btnMostrar.php';        
        require_once 'html/footer.php';

    ?>
<?php

    require_once 'conexion.php';
    require_once 'html/head.php';

?>

    <main>

        <h2 id="cargaNeg">¡Gracias por cargar tu negocio! Revisá que los datos estén correctos,<br>si no podés modificarlos o borrarlos para agregar un nuevo negocio.<br>Cuando estés listx, cargá tus datos personales yendo al botón Cargar datos.</h2>

        <div class="guiaCom">
            
            <table id="vistaPrevia">
                <tr>
                    <th>Nombre del negocio</th>
                    <th>Categoría</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>E-mail</th>
                    <th>Web</th>
                </tr>
            
            <?php 

                require_once 'consultas/selectNeg.php';
                while($guiaComercial = mysqli_fetch_array($select)) { 

            ?>

                <tr>

                    <td> <?php echo $guiaComercial['nom_negocio']; ?> </td>
                    <td> <?php echo $guiaComercial['cat_negocio']; ?> </td>
                    <td> <?php echo $guiaComercial['direc_negocio']; ?> </td>
                    <td> <?php echo $guiaComercial['tel_negocio']; ?> </td>
                    <td> <?php echo $guiaComercial['mail_negocio']; ?> </td>
                    <td> <?php echo $guiaComercial['web_negocio']; ?> </td>

                </tr>

            <?php } ?>

            </table>

        </div>
        
        <div class="flex">
            <button id="btnModificar">Modificar datos</button>
            <button id="btnEliminar">Eliminar negocio</button>
            <button id="btnCargarDatos">Cargar datos</button>
        </div>
        

        <div id="eliminarDatos" style="display:none">

            <h3 id="tit-delete">¿Segurx que desea eliminar su negocio?</h3>
            <button id="delete" onclick="window.location.href='consultas/deleteNeg.php'">Confirmar</button>

        </div>

        <div id="modificarDatos" style="display:none">

            <h3 id="tit-update">Vuelva a poner los datos previos,<br>modificando donde sea necesario</h3>

            <div class="form-container">

                <form action="consultas/updateNeg.php" method="POST">

                    <label>Nombre del negocio</label>
                    <input type="text" name="nom_neg">

                    <label>Categoría</label>
                    <input list="categoria-negocio" name="cat_neg">
                    <datalist id="categoria-negocio">
                        <option value="Automotor">
                        <option value="Bancos y Casas de cambio">
                        <option value="Belleza y cuidado personal">
                        <option value="Comercios varios">
                        <option value="Educación, Cursos, Capacitación">
                        <option value="Fiestas y Eventos"></option>
                        <option value="Galerías Comerciales, Shopping"></option>
                        <option value="Gourmet, Bar, Resto, Delivery"></option>
                        <option value="Hoteles Alojamiento"></option>
                        <option value="Indumentaria y Accesorios"></option>
                        <option value="Informática y Computación"></option>
                        <option value="Jardinería, Florerías, Viveros"></option>
                        <option value="Mascotas"></option>
                        <option value="Propiedades, Bienes Raíces"></option>
                        <option value="Radio Taxis y Mensajería"></option>
                        <option value="Salud"></option>
                        <option value="Servicios para Hogar y Decoración"></option>
                        <option value="Servicios Profesionales"></option>
                    </datalist>

                    <label>Dirección del negocio</label>
                    <input type="text" name="dir_neg">

                    <label>Teléfono del negocio</label>
                    <input type="text" name="tel_neg">

                    <label>E-mail del negocio</label>
                    <input type="text" name="mail_neg">

                    <label>Web del negocio</label>
                    <input type="text" name="web_neg">

                    <button type="reset" id="reset">Borrar el formulario</button>
                    <button type="submit" id="submit">Continuar</button>

                </div>

            </form>

        </div>

        <div id="cargarDatos" style="display:none">

            <h3 id="tit-user">Ingrese sus datos personales</h3>

            <div class="form-container">

                <form action="consultas/insertUser.php" method="POST">

                    <label>Nombre y apellido</label>
                    <input type="text" name="nom_user">

                    <label>DNI/CUIL/CUIT</label>
                    <input type="text" name="dni_user">

                    <label>E-mail</label>
                    <input type="text" name="mail_user">

                    <label>Contraseña</label>
                    <input type="password" name="pass_user">

                    <button type="reset" id="reset">Borrar el formulario</button>
                    <button type="submit" id="submit">Continuar</button>
                
                </form>

            </div>

        </div>

    </main>

    <?php

        require_once 'js/btnData.php';
        require_once 'html/footer.php';

    ?>
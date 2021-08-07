<?php

    require_once 'conexion.php';
    require_once 'html/head.php';

?>
    
    <main>
        <div class="intro">
            <h2>Bienvenidx a la versión Alpha de La Guía Comercial.</h2>
            <h3>¡Apretá el botón para cargar tu primer negocio!</h3>
        </div>
        
        <div class="flex">
            <button id="btnComenzar">Comenzar</button>
        </div>

        <div id="formNeg" class="formNeg">

            <a href="#" id="cerrarForm">&times;</a>

            <form action="consultas/insertNeg.php" method="POST" class="form-container">
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
                <button type="submit" id="submit">Enviar los datos</button>

            </form>

        </div>

    </main>

    <?php

        require_once 'js/btnComenzar.php';
        require_once 'html/footer.php';

    ?>
<script>

    var btnEliminar = document.getElementById("btnEliminar");
    var btnModificar = document.getElementById("btnModificar");
    var btnCargarDatos = document.getElementById("btnCargarDatos");

    var eliminarDatos = document.getElementById("eliminarDatos");
    var modificarDatos = document.getElementById("modificarDatos");
    var cargarDatos = document.getElementById("cargarDatos");

    btnEliminar.addEventListener('click', function() {
        eliminarDatos.style.display = "block";
        modificarDatos.style.display = "none";
        cargarDatos.style.display = "none";
    });

    btnModificar.addEventListener('click', function() {
        modificarDatos.style.display = "block";
        eliminarDatos.style.display = "none";
        cargarDatos.style.display = "none";
    });
    
    btnCargarDatos.addEventListener('click', function() {
        cargarDatos.style.display = "block";
        modificarDatos.style.display = "none";
        eliminarDatos.style.display = "none";
    });

</script>
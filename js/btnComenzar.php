<script>

    var formNeg = document.getElementById("formNeg");
    var btnComenzar = document.getElementById("btnComenzar");
    var cerrarForm = document.getElementById("cerrarForm");

    btnComenzar.addEventListener('click', function() {
        formNeg.style.display = "flex";
    });

    cerrarForm.addEventListener('click', function() {
        formNeg.style.display = "none";
    });

</script>
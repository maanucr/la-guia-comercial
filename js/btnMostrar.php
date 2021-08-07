<script>

    var btnMostrarDueños = document.getElementById("mostrarDueños");
    var dueños = document.getElementsByClassName("dueños");

    var switchDueños = false;

    for(var i=0; i<dueños.length; i++) {
        dueños[i].style.display = "none";
    }

    function mostrarDueños() {

        switchDueños = !switchDueños;

        if(switchDueños == false) {

            btnMostrarDueños.innerHTML = "Mostrar dueños";
            for(var i=0; i<dueños.length; i++) {
                dueños[i].style.display = "none";
            }

        } else {

            btnMostrarDueños.innerHTML = "Ocultar dueños";
            for(var i=0; i<dueños.length; i++) {
                dueños[i].style.display = "table-cell";
            }

        }

    }

</script>
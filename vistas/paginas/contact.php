<?php

if (!isset($_SESSION["validarIngreso"])) {
    echo '<script>window.location = "index.php?pagina=ingreso";</script>';
    return;
} else {
    if ($_SESSION["validarIngreso"] != "ok") {
        echo '<script>window.location = "index.php?pagina=ingreso";</script>';
        return;
    }
}

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
//echo '<pre>'; print_r($usuarios); echo '</pre>'

?>


<?php 
     session_destroy();

    echo '<script>window.location="index.php?pagina=ingreso";</script>';
   
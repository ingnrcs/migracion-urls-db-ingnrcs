<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coloca aquí el código para eliminar el script de migración
    if (unlink("migracion.php")) {
        echo "El script de migración ha sido eliminado.";
    } else {
        echo "Error al intentar eliminar el script de migración.";
    }
}
?>

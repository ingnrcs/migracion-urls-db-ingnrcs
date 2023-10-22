<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluye el archivo wp-config.php para acceder a los datos de conexión a la base de datos
    require_once(__DIR__ . '/../wp-config.php');

    // Define las URL antigua y nueva
    $old_url = $_POST["old_url"];
    $new_url = $_POST["new_url"];

    // Realiza la migración de las URLs en la base de datos
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($connection->connect_error) {
        die("Error de conexión: " . $connection->connect_error);
    }

    // Consulta SQL para actualizar las URLs en la base de datos
    $sql = "UPDATE " . $table_prefix . "options SET option_value = replace(option_value, '$old_url', '$new_url') WHERE option_name = 'home' OR option_name = 'siteurl';
    ";
    $sql .= "UPDATE " . $table_prefix . "posts SET guid = replace(guid, '$old_url', '$new_url');
    ";
    $sql .= "UPDATE " . $table_prefix . "posts SET post_content = replace(post_content, '$old_url', '$new_url');
    ";
    $sql .= "UPDATE " . $table_prefix . "postmeta SET meta_value = replace(meta_value, '$old_url', '$new_url');";

    // Ejecuta las consultas
    if ($connection->multi_query($sql) === true) {
        // Contadores para tablas afectadas y cambios realizados
        $tables_affected = 0;
        $changes_made = 0;

        // Procesar los resultados
        do {
            if ($result = $connection->store_result()) {
                $changes_made += $connection->affected_rows;
                $tables_affected++;
                $result->free();
            }
        } while ($connection->more_results() && $connection->next_result());

        echo "Migración exitosa. ¿Deseas eliminar el script de migración?<br>";
        echo "Tablas afectadas: " . $tables_affected . "<br>";
        echo "Cambios realizados: " . $changes_made . "<br>";
        echo '<form method="post" action="eliminar_script.php">';
        echo '<input type="submit" value="Eliminar el Script">';
        echo '</form>';
    } else {
        echo "Error al actualizar las URLs: " . $connection->error;
    }

    // Cierra la conexión
    $connection->close();
}
?>

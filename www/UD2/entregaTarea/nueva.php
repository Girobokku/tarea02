<?php
include 'utils.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descripcion = filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);

    if (guardarTarea($descripcion, $estado)) {
        echo "<p>Tarea guardada correctamente.</p>";
    } else {
        echo "<p>Error: no se pudo guardar la tarea.</p>";
    }
}
?>

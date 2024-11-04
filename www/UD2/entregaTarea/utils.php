<?php
$tareas = [];

function obtenerTareas() {
    global $tareas;
    return $tareas;
}

function guardarTarea($descripcion, $estado) {
    global $tareas;
    $tarea = [
        'id' => count($tareas) + 1,
        'descripcion' => filtrarTexto($descripcion),
        'estado' => filtrarTexto($estado)
    ];
    $tareas[] = $tarea;
    return true;
}

function filtrarTexto($texto) {
    return trim(preg_replace('/\s+/', ' ', htmlspecialchars($texto)));
}

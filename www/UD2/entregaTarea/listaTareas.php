<?php
include 'utils.php';
$tareas = obtenerTareas();
?>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descripción</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tareas as $tarea): ?>
            <tr>
                <td><?php echo htmlspecialchars($tarea['id']); ?></td>
                <td><?php echo htmlspecialchars($tarea['descripcion']); ?></td>
                <td><?php echo htmlspecialchars($tarea['estado']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

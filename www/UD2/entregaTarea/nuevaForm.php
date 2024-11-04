<?php include 'header.php'; ?>
<div class="container">
    <h2>Crear Nueva Tarea</h2>
    <form action="nueva.php" method="POST">
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-select" id="estado" name="estado">
                <option value="pendiente">Pendiente</option>
                <option value="en proceso">En Proceso</option>
                <option value="completada">Completada</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Tarea</button>
    </form>
</div>
<?php include 'footer.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Reservación de cita en la clínica</title>
    <link rel="stylesheet" type="text/css" href="../css/reserva.css">
</head>
<body>
<a href="../menu.php" class="back-button">Volver Atrás</a>
    <h1>Reservación de cita</h1>

  

    <div class="modal-body">

        <form action="../includes/functions.php" method="POST">
            <div class="form-group">
                <label for="fecha" class="form-label">Fecha*</label>
                <input type="date" id="fecha" name="fecha" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="hora" class="form-label">Hora*</label>
                <input type="time" id="hora" name="hora" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="id_doctor">Doctor</label>
                <select class="form-control" id="id_doctor" name="id_doctor">
                    <option value="0">--Selecciona una opción--</option>
                    <?php
                    include("db.php");
                    // Código para mostrar doctores desde otra tabla
                    $sql = "SELECT * FROM doctor ";
                    $resultado = mysqli_query($conexion, $sql);
                    while ($consulta = mysqli_fetch_array($resultado)) {
                        echo '<option value="' . $consulta['id'] . '">' . $consulta['nombres'] . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="id_especialidad">Especialidad</label>
                <select class="form-control" id="id_especialidad" name="id_especialidad">
                    <option value="0">--Selecciona una opción--</option>
                    <?php
                    include("db.php");
                    // Código para mostrar especialidades desde otra tabla
                    $sql = "SELECT * FROM especialidades ";
                    $resultado = mysqli_query($conexion, $sql);
                    while ($consulta = mysqli_fetch_array($resultado)) {
                        echo '<option value="' . $consulta['id'] . '">' . $consulta['nombre'] . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="nombre_paciente">Nombre completo</label>
                <input class="form-control" name="nombre_paciente" required type="text" id="nombre_paciente" placeholder="Escribe el nombre completo">
            </div>

            <input type="hidden" name="accion" value="insert_cita">
            <br>

            <div class="mb-3">
                <input type="submit" value="Guardar" id="register" class="btn btn-success" name="registrar">
                <a href="citas.php" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>

<!-- editar_cita.php -->

<?php
include "../includes/db.php";

// Verificar si se ha enviado el formulario de edición
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $id_doctor = $_POST["id_doctor"];
    $id_especialidad = $_POST["id_especialidad"];
    $nombre_paciente = $_POST["nombre_paciente"];

    // Actualizar la cita en la base de datos
    $consulta = "UPDATE citas SET fecha='$fecha', hora='$hora', id_doctor='$id_doctor', id_especialidad='$id_especialidad', nombre_paciente='$nombre_paciente' WHERE id='$id'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        // Redireccionar después de la edición exitosa
        header("Location: ../views/mis_citas.php");
        exit();
    } else {
        echo "Error al actualizar la cita: " . mysqli_error($conexion);
    }
}

// Obtener el ID de la cita a editar desde la URL
$id_cita = $_GET["id"];

// Obtener la información de la cita de la base de datos
$consulta_cita = "SELECT * FROM citas WHERE id='$id_cita'";
$resultado_cita = mysqli_query($conexion, $consulta_cita);
$cita = mysqli_fetch_assoc($resultado_cita);

// Asegurarse de que la cita existe
if (!$cita) {
    echo "Cita no encontrada.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/MisCitas.css">
    <script src="../js/jquery.min.js"></script>
    <a href="../menu.php" class="back-button">Volver Atrás</a>
    <br> </br>
</head>

<body id="page-top">

    <div class="container-fluid mt-4">
        <h2>Editar Cita</h2>
        <form action="editar_cita.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $cita['id']; ?>">
            <label for="fecha">Fecha:</label>
            <input type="text" name="fecha" value="<?php echo $cita['fecha']; ?>" required>
            <br>
            <label for="hora">Hora:</label>
            <input type="text" name="hora" value="<?php echo $cita['hora']; ?>" required>
            <br>
            <label for="id_doctor">ID Doctor:</label>
            <input type="text" name="id_doctor" value="<?php echo $cita['id_doctor']; ?>" required>
            <br>
            <label for="id_especialidad">ID Especialidad:</label>
            <input type="text" name="id_especialidad" value="<?php echo $cita['id_especialidad']; ?>" required>
            <br>
            <label for="nombre_paciente">Nombre Paciente:</label>
            <input type="text" name="nombre_paciente" value="<?php echo $cita['nombre_paciente']; ?>" required>
            <br>
            <button type="submit">Guardar Cambios</button>
        </form>
    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Enlaces a Bootstrap y tu archivo de estilos CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/MisCitas.css"> <!-- Asegúrate de ajustar la ruta al archivo CSS correcta -->

    <script src="../js/jquery.min.js"></script>

    <a href="../menu.php" class="back-button">Volver Atrás</a>
    
<br> </br>

</head>

<body id="page-top">

    <div class="container-fluid mt-4">

        <?php
        include "../includes/db.php";
        // Mostrar citas registradas
        $resultado_mostrar = mysqli_query($conexion, "SELECT * FROM citas");
        ?>

        <?php if ($resultado_mostrar) : ?>
            <h2 class="mb-4">Mis Citas:</h2>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>ID Doctor</th>
                            <th>ID Especialidad</th>
                            <th>Nombre Paciente</th>
                        </tr>
                    </thead>
                   
                    <tbody>
    <?php while ($fila = mysqli_fetch_assoc($resultado_mostrar)) : ?>
        <tr>
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['fecha']; ?></td>
            <td><?php echo $fila['hora']; ?></td>
            <td><?php echo $fila['id_doctor']; ?></td>
            <td><?php echo $fila['id_especialidad']; ?></td>
            <td><?php echo $fila['nombre_paciente']; ?></td>
            <td>
                <a href="../includes/editar_cita.php?id=<?php echo $fila['id']; ?>" class="btn-editar">Actualizar/reprogramar</a>

            </td>
        </tr>
    <?php endwhile; ?>
</tbody>

                </table>
            </div>
        <?php else : ?>
            <p class="alert alert-danger">Error al obtener las citas: <?php echo mysqli_error($conexion); ?></p>
        <?php endif; ?>

        <?php
        mysqli_close($conexion);
        ?>

        <script src="../package/dist/sweetalert2.all.js"></script>
        <script src="../package/dist/sweetalert2.all.min.js"></script>
        <script src="../package/jquery-3.6.0.min.js"></script>

    </div>

</body>

</html>

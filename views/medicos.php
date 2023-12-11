<?php
// Inicio de la gestión de sesiones
session_start();
error_reporting(0); // Desactivar la notificación de errores
$varsesion = $_SESSION['nombre']; // Obtener el valor 'nombre' de la sesión

// Verificar si la variable de sesión es nula o vacía
if ($varsesion == null || $varsesion = '') {
    header("Location: ../includes/_sesion/login.php"); // Redirigir a la página de inicio de sesión si la sesión no es válida
    die(); // Detener la ejecución del script
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadatos -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Inclusión del script de jQuery -->
    <script src="../js/jquery.min.js"></script>
</head>

<?php include "../includes/header.php"; // Incluir la cabecera ?>

<body id="page-top">

    <!-- Comienzo del contenido de la página -->
    <div class="container-fluid">

        <!-- Ejemplo de DataTables -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Título de la página -->
                <h6 class="m-0 font-weight-bold text-primary">Lista de Doctores</h6>
                <br>
                <!-- Botón para mostrar el modal de agregar un nuevo doctor -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#doctor">
                    <span class="glyphicon glyphicon-plus"></span> Agregar doctor <i class="fa fa-user-md" aria-hidden="true"></i>
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <!-- Tabla para mostrar los doctores -->
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Folio#</th>
                                <th>Nombre</th>
                                <th>Especialidad</th>
                                <th>Sexo</th>
                                <th>Teléfono#</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Correo</th>
                                <th>Fecha de Registro</th>
                                <th>Acciones..</th>
                            </tr>
                        </thead>

                        <?php
                        // Incluir la conexión a la base de datos
                        include "../includes/db.php";
                        
                        // Obtener los doctores desde la base de datos
                        $result = mysqli_query($conexion, "SELECT * FROM doctor ");
                        
                        // Iterar sobre cada fila de datos
                        while ($fila = mysqli_fetch_assoc($result)) :
                        ?>
                            <!-- Mostrar cada fila en la tabla -->
                            <tr>
                                <td><?php echo $fila['cedula']; ?></td>
                                <td><?php echo $fila['nombres']; ?></td>
                                <td><?php echo $fila['id_especialidad']; ?></td>
                                <td><?php echo $fila['sexo']; ?></td>
                                <td><?php echo $fila['telefono']; ?></td>
                                <td><?php echo $fila['fecha']; ?></td>
                                <td><?php echo $fila['correo']; ?></td>
                                <td><?php echo $fila['fecha_registro']; ?></td>
                                <td>
                                    <!-- Botones para editar y eliminar -->
                                    <a class="btn btn-warning" href="../includes/editar_doctor.php?id=<?php echo $fila['id'] ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="../includes/eliminar_doctor.php?id=<?php echo $fila['id'] ?>" class="btn btn-danger btn-del">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endwhile; ?>

                        </tbody>
                    </table>

                    <!-- Script de JavaScript para eliminar registros con confirmación -->
                    <script>
                        $('.btn-del').on('click', function(e) {
                            e.preventDefault();
                            const href = $(this).attr('href')

                            // Mostrar un cuadro de diálogo de confirmación usando SweetAlert2
                            Swal.fire({
                                title: '¿Estás seguro de eliminar a este doctor?',
                                text: "¡No podrás revertir esto!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Sí, eliminar!',
                                cancelButtonText: 'Cancelar!',
                            }).then((result) => {
                                if (result.value) {
                                    if (result.isConfirmed) {
                                        Swal.fire(
                                            '¡Eliminado!',
                                            'El usuario fue eliminado.',
                                            'success'
                                        )
                                    }

                                    // Redirigir al script de eliminación
                                    document.location.href = href;
                                }
                            })
                        })
                    </script>

                    <!-- Inclusión de los scripts de

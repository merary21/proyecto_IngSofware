<?php
include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];

$query = "INSERT INTO usuariopaciente(nombre_completo, correo, telefono, usuario, contra)
VALUES('$nombre_completo', '$correo', '$telefono', '$usuario', '$contra')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuariopaciente WHERE correo='$correo'");
if (mysqli_num_rows($verificar_correo)> 0) {
    echo '
    <script>
    alert("Este correo ya esta registrado. Intenta con otro diferente");
    window.location = "registro.php";
    </script>
    ';
    exit();
}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuariopaciente WHERE usuario='$usuario'");
if (mysqli_num_rows($verificar_usuario)> 0) {
    echo '
    <script>
    alert("Este usuario ya esta registrado. Intenta con otro diferente");
    window.location = "registro.php";
    </script>
    ';
    exit();
}

    $ejecutar = mysqli_query($conexion, $query);
if($ejecutar){
    echo '
    <script>
    alert("Usuario registrado exitosamente");
    window.location = "menu.php";
    </script>
    ';

}else {
    echo '
    <script>
    alert("Usuario no registrado, intentelo nuevamente");
    window.location = "registro.php";
    </script>
    ';
}
mysqli_close($conexion); 
?>
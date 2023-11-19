<?php
session_start();
include 'conexion_be.php';


$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuariopaciente WHERE 
correo='$correo' and contra='$contrasena '");

if (mysqli_num_rows($validar_login) > 0){

    $_SESSION['usuariopaciente'] = $correo;
    header("location: menu.php");
    exit;

}else {
    echo '
    <script>
    alert("Usuario no registrado. por favor verifique los datos ingresados");
    window.location = "registro.php";
    </script>
    ';

    exit;
}

?>
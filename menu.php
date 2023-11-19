<?php
session_start();

if(!isset($_SESSION['usuariopaciente'])){
    echo '
    <script>
    alert("Por favor debe iniciar sesion");
    window.location = "registro.php";
    </script>
    ';
    session_destroy();
    die();

}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="menu.css">
    <title>Menu</title>

<a href="index.html" class="back-button">Volver Atrás</a>
<br> </br>

<head>
    
    <style>
        body {
            font-family: Impact, sans-serif;
        }

        #menu {
            background-color: #6DB96B ;
            text-align: center;
        }

        #menu button {
            font-weight: bold;
        color: #FFF;
        border: 2px solid black;
        background-color: #3498DB;
        padding: 10px 20px;
        margin: 10px;
        cursor: pointer;
        }

        #content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .image-container {
            margin: 20px;
            text-align: center;
        }

        .image-container img {
            width: 200px;
            height: 200px;
            border: 2px solid #555;
            border-radius: 10px;
        }

        .image-description {
            margin-top: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<div id="menu">
    <a href="cerrar_sesion.php"><button>Cerrar sesión</button></a>
    <a href="./includes/form_citaa.php"><button>Reservación de cita</button></a>
    <a href="#"><button>Cancelar cita</button></a>
    <a href="#"><button>Reprogramación de cita</button></a>
    <a href="contacto.html"><button>Mensajería</button></a>
</div>
<br> </br>
<h1 style="color: black; text-align: center;">Especialidades Médicas</h1>
<br> </br>

    <div id="content">
        <div class="image-container">
            <img src="https://saludprimavera.com.pe/wp-content/uploads/2022/02/medicina-general.jpg" alt="Imagen 1">
            <div class="image-description">Medicina General</div>
        </div>

        <div class="image-container">
            <img src="https://irp.cdn-website.com/dcf2cd5d/MOBILE/jpg/7345.jpg" alt="Imagen 2">
            <div class="image-description">Cardiologia</div>
        </div>

        <div class="image-container">
            <img src="https://images.ecestaticos.com/6GjFfLqEM2t9my6xt-l_E1qX82I=/124x34:1920x1381/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F76d%2Fddc%2Fd46%2F76dddcd46057c4a3ece9efa6e3d9c438.jpg" alt="Imagen 3">
            <div class="image-description">Dermatologia</div>
        </div>

        <div class="image-container">
            <img src="data:image/jpeg;base64,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" alt="Imagen 4">
            <div class="image-description">Odontologia</div>
        </div>

        <div class="image-container">
            <img src="https://www.queestudiar.org/wp-content/uploads/2017/10/pediatra.jpeg" alt="Imagen 5">
            <div class="image-description">Pediatria</div>
        </div>
        
    </div>

<script src="./js/menu.js"></script>

</body>
</html>




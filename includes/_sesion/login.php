
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Login</title>
   
    <link rel="stylesheet" type="text/css "href="../../css/style.css">

	<link rel="icon" href="assets/img/logo.png" type="image/x-icon"/>
	<script src="../../js/fonts.js"></script>
</head>
<section class="logo-section">
            <a href="../../inicio.html"> 
                <img src="../../images/lg - copia.png" alt="Logo de Mi Sitio Web">
            </a>
        </section>
<body>
   <!--  <img class="wave"src="../assets/img/wave.png" alt="">  -->
    <div class="contenedor">
    <div class="img">
    <img src="https://static.vecteezy.com/system/resources/previews/011/576/605/non_2x/entrepreneurs-are-managing-data-on-their-laptops-document-management-concept-online-big-data-documentation-database-free-photo.jpg" alt="">
    </div>
    <div class="contenido-login">


    <form action="../functions.php" method="POST">


    <h1 class="l">Ingrese las credenciales</h1>
   
    <div class="input-div nit">
    <div class="i">
    <i class="fas fa-user"></i>
    </div>
    <div class="div">

     <input type="text"  name="nombre" id="nombre"  placeholder="Usuario">
    </div>
    </div>
    <div class="input-div pass">
    <div class="i">
    <i class="fas fa-lock"></i>
    </div>
    <div class="div">

    <input type="password" name="password" id="password" placeholder="Contraseña" >

    <input type="hidden" name="accion" value="acceso_user">
    </div>
    </div>

   
   
    <button class="btn"  type="submit"> Iniciar sesion </button> 

    </form>
    

    </div>
    </div>

    <!-- Js personalizado -->
    
	
</body>

</html>

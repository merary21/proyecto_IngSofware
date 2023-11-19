<?php

session_start();
if (isset($_SESSION['usuariopaciente'])){
    header("location: menu.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
        <link rel="stylesheet" href="css.css">


       
    <title>Registro | Inicio de sesion </title>
    

</head>
<body>
<a href="index.html" class="back-button">Volver Atrás</a>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="iniciodesesion_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña"name="contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="registroyinicio.php" method ="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico"name="correo">
                        <input type="num" placeholder="Telefono"name="telefono">
                        <input type="text" placeholder="Usuario"name="usuario">
                        <input type="password" placeholder="Contraseña"name="contra">
                        <button>Regístrarse</button>
                
                    </form>
                </div>
            </div>

        </main>

        <script src="registro.js"></script>
</body>
</html>   
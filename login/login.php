<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: ../index.php");
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bienvenido, ingrese su usuario</title>
</head>

<body>

    <div class="contenedor">

        <form class="formulario" action="verificarlogin.php" method="post">
            <h1 class="titulo">Inicia sesión o crea una cuenta <i class="fas fa-pizza-slice"></i></h1>

            <input class="input" type="text" name="username" placeholder="Usuario" pattern="[A-Za-z0-9_-]{1,15}" required><br>
            <input class="input" type="password" name="password" placeholder="Contraseña" pattern="[A-Za-z0-9_-]{1,15}" required><br></i>
            <input class="boton" type="submit" name="Ingresar" value="Ingresar">
            <label>¿No tenes cuenta? <a class="botonregistro" href="registrarse.html">Registrarse</a></label>
        </form>

    </div>
</body>

</html>
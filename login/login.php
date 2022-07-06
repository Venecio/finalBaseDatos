<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: ../index.php");
}
?>
<html class="html-login" lang="en">

<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset="UTF-8">
    <title>Bienvenido, ingrese su usuario</title>
</head>

<body class="body-login">

    <div class="contenedor-login">
        <form class="formulario" action="verificarlogin.php" method="post">
            <h1 class="titulo">Inicia sesión o crea una cuenta <i class="fas fa-pizza-slice"></i></h1>
            <input class="input" type="text" name="username" placeholder="Usuario" pattern="[A-Za-z0-9_-]{1,15}" required><br>
            <input class="input" type="password" name="password" placeholder="Contraseña" pattern="[A-Za-z0-9_-]{1,15}" required><br></i>
            <input class="boton" type="submit" name="Ingresar" value="Ingresar">
            <label> <a class="botonregistro" href="registrarse.html">Registrarse</a></label><br>
            <img class="imagenRegistro"src="../recursos/icon2.png" alt="Logo de la tienda">

        </form>
    </div>
</body>

</html>
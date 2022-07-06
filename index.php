<?php
require("./conexion/conexion.php");
session_start();
if (isset($_SESSION['username'])){
$id_user = $_SESSION['id_user'];
$consulta = "SELECT * FROM compras WHERE id_user = '$id_user' and estado_compra = 0";
$resultado = mysqli_query($conexion, $consulta);
$rows = mysqli_num_rows($resultado);
}else{

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c0bb3670ef.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilosArticulos.css">
    <title>Tienda Fito</title>

</head>

<body>
    <nav class="menuNavegacion">
        <h3 class="topAviso">El precio del envio varía según su localización</h3>
        <ul class="UlMenu">
            <a href="index.php"><li>Inicio</li></a>
            <li>Novedades</li>
            <h2 class="fitoLogo">Tienda <span class="spanFito">Fito</span></h2>
            <li>Ofertas</li>
            <li>Contactame</li>
            <li class="navOpcionUsuario"><a href="./carrito/historialcompras.php"><i class="fas fa-history"></i>Compras</a></li>
           <li class="navOpcionUsuario"><a href="./carrito/vercarrito.php"><i class="fas fa-shopping-cart">Carrito <?php if (isset($_SESSION['username'])){ echo "(".$rows.")"; }else{}?></i></a></li>
           <div class="dropdown">
                <li class="dropbtn">Usuario</li>
                <div class="dropdown-content">
                    <?php
                        if (!isset($_SESSION['username'])) {?>
                            <a href="login/login.php">Ingresa</a>
                            <a href="login/registrarse.html">Creá tu cuenta</a>
                        <?php
                        }else{?>
                            <a href="carrito/historialcompras.php">Compras</a>
                            <a href="login/cerrarsesion.php">Cerrar Sesion</a>
                            <?php
                        }
                        ?>
                </div>
            </div>
        </ul>
    </nav>
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            
            <div class="carousel-inner">
                <div class="item active">
                    <img src="recursos/banner1.png" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                    <img src="recursos/banner2.png" alt="Chicago" style="width:100%;">
                </div>

                <div class="item">
                    <img src="recursos/banner3.png" alt="New york" style="width:100%;">
                </div>
            </div>


        </div>
    </div>
 <br>


    <div class="contenedor">
        <div class="contenedor-ropa">
            <div class="carta-ropa" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)
            ), url('./recursos/remeras.jpg')">
                <div class="texto">
                    <a href="./productos/remeras.php">REMERAS</a>
                </div>
            </div>
            <div class="carta-ropa" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)
            ), url('./recursos/pantalones.jpg')">

                <div class="texto">
                    <a href="./productos/pantalones.php">PANTALONES</a>
                </div>
            </div>
            <div class="carta-ropa" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)
            ),url('./recursos/ropaInterior.jpg')">

                <div class="texto">
                    <a href="./productos/ropaInterior.php">ROPA INTERIOR</a>
                </div>
            </div>
            <div class="carta-ropa" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)
            ), url('./recursos/zapas.jpg')">

                <div class="texto">
                    <a href="./productos/calzados.php">CALZADOS</a>
                </div>
            </div>
            <div class="carta-ropa" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)
            ),url('./recursos/invierno.jpg')">

                <div class="texto">
                    <a href="./productos/temporada.php">TEMPORADA INVIERNO</a>
                </div>
            </div>
            <div class="carta-ropa" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)
            ),url('./recursos/ropan.jpg')">

                <div class="texto">
                    <a href="./productos/ninios.php">NIÑOS</a>
                </div>
            </div>
        </div>
    </div>

    <footer>Página web creada por @Venecio</footer>
</body>

</html>
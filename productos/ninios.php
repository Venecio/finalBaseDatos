<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c0bb3670ef.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../estilosArticulos.css">

</head>

<body>
    <nav class="menuNavegacion">
        <h3 class="topAviso">El precio del envio varía según su localización</h3>
        <ul class="UlMenu">
            <a href="../index.php">
                <li>Inicio</li>
            </a>
            <a href="../quienesSomos.html">
                <li>Quienes somos</li>
            </a>
            <a href="../guiaTalles.html">
                <li>Guia de talles</li>
                <li class="logoFito"><img src="../recursos/icon2.png" style="height:100px"></li>
                <li>Contactame</li>
                <li class="navOpcionUsuario"><a href="../carrito/vercarrito.php"><i class="fas fa-shopping-cart">Carrito <?php if (isset($_SESSION['username'])) {
                                                                                                                                echo "(" . $rows . ")";
                                                                                                                            } else {
                                                                                                                            } ?></i></a></li>
                <div class="dropdown">
                    <li class="dropbtn"> Usuario</i></li>
                    <div class="dropdown-content">
                        <?php
                        session_start();
                        if (!isset($_SESSION['username'])) { ?>
                            <a href="../login/login.php">Ingresa</a>
                            <a href="../login/registrarse.html">Creá tu cuenta</a>
                        <?php
                        } else { ?>
                            <a href="../carrito/historialcompras.php">Compras</a>
                            <a href="../login/cerrarsesion.php">Cerrar Sesion</a>
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

            </ol>


            <div class="carousel-inner">
                <div class="item active">
                    <img src="../recursos/banner1.png" alt="banner info" style="width:100%;">
                </div>

                <div class="item">
                    <img src="../recursos/banner2.png" alt="Banner info" style="width:100%;">
                </div>

            </div>


        </div>
    </div>
    <br>
    <div class="contenedor-decontenedores">
        <div class="contenedor-cartas">
            <?php
            require("../conexion/conexion.php");
            $consulta = "SELECT * FROM productos WHERE producto_tipo = 'ninios'";
            $result = mysqli_query($conexion, $consulta);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="carta">
                    <?php $path = $row['producto_imagen']; ?>
                    <img src=<?php echo "../recursos/$path"; ?> width="200" height="200"><br>
                    <?php echo $row['producto_nombre'] ?><br>
                    <?php echo $row['producto_talle'] ?><br>
                    <?php echo "$" . $row['producto_precio'] ?><br>
                    <?php echo '<a class="comprarbttn" href="' . htmlspecialchars("../carrito/carrito.php?id=" . urlencode($row['id_producto'])) . '" >Agregar al carrito</a>' ?>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>
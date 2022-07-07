<?php
require("../conexion/conexion.php");
session_start();
$numero_compra = $_GET['numero_compra'];
$id_user = $_SESSION['id_user'];

$consulta = "SELECT productos.producto_nombre, productos.producto_precio, productos.producto_talle, compras.numero_compra 
            FROM productos 
            INNER JOIN compras 
            ON compras.id_producto = productos.id_producto
            WHERE compras.estado_compra = 1 AND compras.id_user = $id_user AND compras.numero_compra = $numero_compra";
$resultado = mysqli_query($conexion, $consulta);
?>

<!DOCTYPE html>
<html lang="en">

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
    <link rel="shortcut icon" href="../recursos/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../estilosArticulos.css">
    <title>Tienda Fito</title>

</head>

<body>
    <nav class="menuNavegacion">
        <h3 class="topAviso">El precio del envio varía según su localización</h3>
        <ul class="UlMenu">
            <a href="../index.php">
                <li>Inicio</li>
            </a>
            <a href="quienesSomos.html">
                <li>Quienes somos</li>
            </a>
            <a href="guiaTalles.html">
                <li>Guia de talles</li>
                <li class="logoFito"><img src="../recursos/icon2.png" style="height:100px"></li>
                <li>Contactame</li>
                <li class="navOpcionUsuario"><a href="../carrito/vercarrito.php"><i class="fas fa-shopping-cart">Carrito </i></a></li>
                <div class="dropdown">
                    <li class="dropbtn"> Usuario</i></li>
                    <div class="dropdown-content">
                        <?php
                        if (!isset($_SESSION['username'])) { ?>
                            <a href="../login/login.php">Ingresa</a>
                            <a href="../login/registrarse.html">Creá tu cuenta</a>
                        <?php
                        } else { ?>
                            <a href="historialcompras.php">Compras</a>
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
                    <img src="../recursos/banner1.png" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                    <img src="../recursos/banner2.png" alt="Chicago" style="width:100%;">
                </div>

            </div>


        </div>
    </div>
    <br>
    <br>
    <h1 class="htitulo">Productos correspondientes a su compra</h1>
    <div class="tabla-container">
        <table class="tabla-carrito">
            <tr>
                <th colspan="4">Numero compra: <?php echo $numero_compra; ?></th>
            </tr>
            <tr>
                <th class="h-th">Producto</th>
                <th class="h-th">Talle</th>
                <th class="h-th">Precio</th>

            </tr>

            <?php

            $total_compra = 0;
            while ($row = mysqli_fetch_array($resultado)) {
            ?>
                <tr class="item">
                    <td class="h-td"><?php echo $row['producto_nombre'] ?></td>
                    <td class="h-td"><?php echo $row['producto_talle'] ?></td>
                    <td class="h-td"><?php echo "$" . $row['producto_precio'] ?></td>

                </tr>

            <?php
                $total_compra = $total_compra + $row['producto_precio'];
            }
            ?>
            <tr class="">
                <th colspan="2">Total de la compra: </th>
                <th class="h-th" colspan="2"><?php echo "$" . $total_compra; ?></th>
            </tr>


        </table>
    </div>
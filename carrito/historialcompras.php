<?php
require("../conexion/conexion.php");
session_start();
$id_user = $_SESSION['id_user'];
$consulta = "SELECT compras.numero_compra, SUM(productos.producto_precio) 
FROM compras 
INNER JOIN productos 
ON compras.id_producto = productos.id_producto
WHERE compras.estado_compra = 1 AND compras.id_user = '$id_user'
GROUP BY compras.numero_compra";
$resultado = mysqli_query($conexion, $consulta);
if (mysqli_num_rows($resultado) > 0) {
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
    <title>Ver compras</title>

</head>

<body >
    <nav class="menuNavegacion">
        <h3 class="topAviso">El precio del envio varía según su localización</h3>
        <ul class="UlMenu">
            <a href="../index.php"><li>Inicio</li></a>
            <a href="quienesSomos.html"><li>Quienes somos</li></a>
            <a href="guiaTalles.html"><li>Guia de talles</li>
            <li class="logoFito"><img src="../recursos/icon2.png" style="height:100px"></li>
            <li>Contactame</li>
           <li class="navOpcionUsuario"><a href="vercarrito.php"><i class="fas fa-shopping-cart">Carrito</i></a></li>
           <div class="dropdown">
                <li class="dropbtn"> Usuario</i></li>
                <div class="dropdown-content">
                    <?php
                        if (!isset($_SESSION['username'])) {?>
                            <a href="../login/login.php">Ingresa</a>
                            <a href="../login/registrarse.html">Creá tu cuenta</a>
                        <?php
                        }else{?>
                            <a href="historialcompras.php">Compras</a>
                            <a href="../login/cerrarsesion.php">Cerrar Sesion</a>
                            <?php
                        }
                        ?>
                </div>
            </div>
        </ul>
    </nav>

 <br>
 <br>
        <div class="tabla-contenedor">
            <table class="tabla-carrito">
                <tr>
                    <th class="hth">Numero compra</th>
                    <th class="hth">Total</th>
                    <th class="hth">Accion</th>
                </tr>

                <?php
                while ($row = mysqli_fetch_array($resultado)) {
                ?>
                    <tr class="item">
                        <td class="htd"><?php echo $row['numero_compra'] ?></td><br>
                        <td class="htd"><?php echo "$" . $row['SUM(productos.producto_precio)'] ?></td><br>
                        <td class="htd"><?php echo '<a class="vercompra" href="' . htmlspecialchars("vercompra_historial.php?numero_compra=" . urlencode($row['numero_compra']))
                                            . '" >Ver compra</a>' ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    <?php
} else {
    echo "<h2 class='h2-carrito'>No hay datos de tus compras anteriores.</h2>";
}
    ?>
    </body>
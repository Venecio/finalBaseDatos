<?php
require("../conexion/conexion.php");
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
    <title>Carrito</title>

</head>

<body>
    <nav class="menuNavegacion">
        <h3 class="topAviso">El precio del envio varía según su localización</h3>
        <ul class="UlMenu">
            <a href="../index.php">
                <li>Inicio</li>
            </a>
            <li>Novedades</li>
            <li class="logoFito"><img src="../recursos/icon2.png" style="height:100px"></li>
            <li>Ofertas</li>
            <li>Contactame</li>
            <li class="navOpcionUsuario"><a href="vercarrito.php"><i class="fas fa-shopping-cart">Carrito <?php if (isset($_SESSION['username'])) {
                                                                                                                        echo "(" . $rows . ")";
                                                                                                                    } else {
                                                                                                                    } ?></i></a></li>
            <div class="dropdown">
                <li class="dropbtn">Usuario</li>
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
    <?php
    
    $id_user = $_SESSION['id_user'];
    $consulta = "SELECT *, SUM(productos.producto_precio) as producto_precio2, count(productos.producto_nombre) as cant_productos
                FROM compras,productos,usuarios
                WHERE compras.id_user = usuarios.id_user AND productos.id_producto = compras.id_producto 
                AND compras.estado_compra = 0 AND compras.id_user = $id_user GROUP BY productos.id_producto";
    $resultado = mysqli_query($conexion, $consulta);
    if (mysqli_num_rows($resultado) > 0) {
    ?>
        <div class="tabla-container">
            <table class="tabla-carrito">
                <h2 class="h2-carrito">Productos que hay actualmente</h2>
                <tr>
                    <th class="cth"></th>
                    <th class="cth">Producto</th>
                    <th class="cth">Talle</th>
                    <th class="cth">Precio</th>
                    <th class="cth">Acción</th>
                </tr>
                <?php
                $c=0;
                $numero_compra = 0;

                while ($row = mysqli_fetch_array($resultado)) {
                    if ($c == 0) {
                        $numero_compra = $row['numero_compra'];
                    }
                ?>
                    <tr>
                    <?php $path = $row['producto_imagen']; ?>
                        <td class="ctd"><img class="imagenTabla" src=<?php echo "../recursos/$path";?>></td>
                        <td class="ctd"><?php echo $row['producto_nombre']." x".$row['cant_productos']; ?></td>
                        <td class="ctd"><?php echo $row['producto_talle'] ?></td>
                        <td class="ctd"><?php echo "$" . $row['producto_precio2']?></td>

                        <td class="ctd"><?php echo '<a class="eliminar" href="' . htmlspecialchars("eliminarProducto.php?id_compra=" . urlencode($row['id_compra'])) . '" >Eliminar</a>' ?></td>

                    </tr>
                <?php
                }
                $c++;
                //Para sumar el total//
                $consulta = "SELECT *, SUM(productos.producto_precio) as producto_precio2, count(productos.producto_nombre) as cant_productos
                FROM compras,productos,usuarios
                WHERE compras.id_user = usuarios.id_user AND productos.id_producto = compras.id_producto 
                AND compras.estado_compra = 0 AND compras.id_user = $id_user";
                $resultado = mysqli_query($conexion, $consulta);
                while ($row = mysqli_fetch_array($resultado)) {

                
                ?>

                <tr>

                    <th colspan="2" class="cthtotal"><?php echo '<a id="bttn-comprar" href="' . htmlspecialchars("compras.php?numero_compra=" . urlencode($numero_compra)) . '" >Comprar todo</a>' ?></th>
                    <th colspan="3" class="cthtotal2">Total $<?php echo $row['producto_precio2'] ?></th>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    <?php

    } else {
        echo "<h2 class='h2-carrito'>No hay nada en el carrito, elegí los productos a comprar.</h2>";
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Productos disponibles</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>

    <div class="contenedor">
        <?php
        require("../conexion/conexion.php");
        $consulta = "SELECT * FROM productos WHERE producto_tipo = 'ninio'";
        $result = mysqli_query($conexion, $consulta);
        while ($row = mysqli_fetch_array($result)) {

        ?>

            <div class="item">
                <?php $path = $row['producto_imagen']; ?>
                <img src=<?php echo "../recursos/$path"; ?> width="200" height="200"><br>
                <?php echo $row['producto_nombre'] ?><br>
                <?php echo $row['producto_talle'] ?><br>
                <?php echo "$" . $row['producto_precio'] ?><br>
                <?php echo '<a class="comprarbttn" href="' . htmlspecialchars("../carrito/carrito.php?id=" . urlencode($row['id_producto'])) . '" >Comprar</a>' ?>
            </div>
        <?php
        }
        ?>
    </div>

</body>

</html>
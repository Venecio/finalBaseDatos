<?php
require("../conexion/conexion.php");
session_start();
$numero_compra = $_GET['numero_compra'];
$id_user = $_SESSION['id_user'];
print_r($_SESSION);
$consulta = "SELECT productos.producto_nombre, productos.producto_precio, productos.producto_talle, compras.numero_compra 
            FROM productos 
            INNER JOIN compras 
            ON compras.id_producto = productos.id_producto
            WHERE compras.estado_compra = 1 AND compras.id_user = $id_user AND compras.numero_compra = $numero_compra";
$resultado = mysqli_query($conexion, $consulta);
?>
<title>Compra detallada</title>

<h1 class="htitulo">Productos correspondientes a su compra</h1>

<table class="ver_tabla">
    <tr>
        <th colspan="4" >Numero compra: <?php echo $numero_compra; ?></th>
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
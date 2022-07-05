  
<?php
require("../conexion/conexion.php");

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login/registrarse.html");
}else{

$consulta= "SELECT * FROM usuarios WHERE username = '$user' AND user_password = '$password'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas>0){
    session_start();
    $row= mysqli_fetch_assoc($resultado);
    $id_user=$row['id_user'];
    $_SESSION['username']=$user;
    $_SESSION['id_user']=$id_user;
    
}else{
    header("Location: ../login/login.php");
}
}
$id_producto = $_REQUEST['id'];
session_start();
$id_user = $_SESSION['id_user'];
$consulta = "SELECT * FROM compras WHERE id_user = '$id_user' and estado_compra = 0";
$resultado = mysqli_query($conexion, $consulta);
$cantidad_productos_carrito = mysqli_num_rows($resultado);

if ($cantidad_productos_carrito > 0) {

    $productos_carrito = mysqli_fetch_assoc($resultado);
    $num_compra = $productos_carrito['numero_compra'];

    $consulta = "INSERT INTO compras (id_user,id_producto,estado_compra,numero_compra) VALUES ($id_user,$id_producto,0,$num_compra)";
    $resultado = mysqli_query($conexion, $consulta);
} else {

    $consulta = "SELECT MAX(numero_compra) as numero FROM compras";
    $resultado = mysqli_query($conexion, $consulta);

    $row = mysqli_fetch_assoc($resultado);
    $numero = (int)$row['numero'];

    echo $numero;
    if ($numero >= 0) {
        $numero = $numero + 1;
    }


    $consulta = "INSERT INTO compras (id_user,id_producto,estado_compra,numero_compra) VALUES ($id_user,$id_producto,0,$numero)";
    $resultado = mysqli_query($conexion, $consulta);
}
mysqli_free_result($resultado);
mysqli_close($conexion);
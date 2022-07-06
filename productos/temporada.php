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
        <h3 href="" class="topAviso">El precio del envio varía según su localización</h3>
        <ul class="UlMenu">
            <a href="../index.php">
                <li>Inicio</li>
            </a>
            <li>Novedades</li>
            <h2 class="fitoLogo">Tienda <span class="spanFito">Fito</span></h2>
            <li>Ofertas</li>
            <li>Contactame</li>
            <a href="../carrito/historialcompras.php">
                <li><i class="fas fa-history"></i>Compras</li>
            </a>
            <a href="../carrito/vercarrito.php"><i class="fas fa-shopping-cart">
                    <li class="carritoLi">Carrito</li>
                </i></a>
            <li>Hola <?php
                        session_start();
                        echo $_SESSION['username']; ?></li>
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
                    <img src="../recursos/banner1.png" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                    <img src="../recursos/banner2.png" alt="Chicago" style="width:100%;">
                </div>

                <div class="item">
                    <img src="../recursos/banner3.png" alt="New york" style="width:100%;">
                </div>
            </div>


        </div>
    </div>
    <br>
    
    <div class="contenedor">
        <?php
        
        require("../conexion/conexion.php");
        $consulta = "SELECT * FROM productos WHERE producto_tipo = 'calzado'";
        $result = mysqli_query($conexion, $consulta);
        while ($row = mysqli_fetch_array($result)) {

        ?>

            <div class="item">
                <?php $path = $row['producto_imagen']; ?>
                <img src=<?php echo "../recursos/$path"; ?> width="200" height="200"><br>
                <?php echo $row['producto_nombre'] ?><br>
                <?php echo $row['producto_talle'] ?><br>
                <?php echo "$" . $row['producto_precio'] ?><br>
                <?php echo '<a class="comprarbttn" href="' . htmlspecialchars("../carrito/carrito.php?id=" . urlencode($row['id_producto'])) . '" >Comprar</a>'  ?>
                
            </div>
        <?php
        }
    print_r($_SESSION);
        ?>
    </div>

</body>

</html>
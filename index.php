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
    <link rel="stylesheet" href="estilosArticulos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Tienda Fito</title>

</head>

<body>
    <nav class="menuNavegacion">
        <h3 href="" class="topAviso">Envio varía según su localización</h3>
        <ul class="UlMenu">
            <li>Inicio</li>
            <li>Novedades</li>
            <h2 class="fitoLogo">Tienda <span class="spanFito">Fito</span></h2>
            <li>Ofertas</li>
            <li>Contactame</li>
        </ul>
    </nav>
    <div class="divTabla">
        <table style="margin: 0 auto;">
            <tr>
                <td>Pantalones</td>
                <td>Remeras</td>
                <td>Medias</td>
                <td>Vestidos</td>
            </tr>
            <tr>
                <td>Ropa interior</td>
                <td>Calzado</td>
                <td>Accesorios</td>
                <td>Camperas</td>
            </tr>
            <tr>
                <td>Camisas</td>
                <td>Musculosas</td>
                <td>Conjuntos</td>
                <td>Hogar</td>
            </tr>


        </table>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="sn.png" alt="Los Angeles" style="width:80%;">
            </div>

            <div class="item">
                <img src="sn.png" alt="Chicago" style="width:80%;">
            </div>

            <div class="item">
                <img src="sn.png" alt="New York" style="width:80%; height:100px;"> 
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <footer>Página web creada por @Venecio</footer>
</body>

</html>
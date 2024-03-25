<?php

session_start();
if(!isset($_SESSION['usuario'])){
    header("Location:../index.php");
}else{
    if($_SESSION['usuario'] == "ok"){
        $nombreUsuario = $_SESSION['nombreUsuario'];
    }
}


//Corrige la ruta de la pagina web
$url="http://".$_SERVER['HTTP_HOST']."/polizapdf";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        .tabla1, th, td {
            border-collapse: collapse;
            border : 1px solid black;
            font-family: Calibri;
            font-size: 12px;
        }

        .tabla1 {
            width: 100%;
        }

        .fila1--celda1__p{
            margin-bottom: 0;
            margin-top: 0;
        }
        .fila2--celda1__columna{
            display: flex;
            flex-direction: row;
            justify-content: space-around

        }

        .fila2--celda1__p{
            margin-top: 5px;
            margin-bottom: 5px;

        }

        .fila3--celda1__p{
            margin: 0;
        }

        .fila4--celda1{
            width: 65%;

        }
        .fila4--celda2{
            width: 35%;

        }

        .fila4--celda1__columna, .fila2--celda2__columna{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .fila4--celda1__p, .fila4--celda2__p{
            font-weight: bold;
        }

        .fila4--celda1__banamex{
            margin-bottom: 10px;
        }

        .fila4--celda1__p{
            margin: 3px 0 0 0;
            width: 33.3%;
        }
        .fila4--oxxo{
            display: block;
            font-size: 9px;
        }
        
        .fila4--transferencia{
            display: block;
            margin-top: 3px;
            text-decoration: underline;
        }

        .fila4--celda1--bbvaspei{
            margin-bottom: 3px;
        }

        .fila4--celda2__p{
            margin: 3px 0 0 0;
        }

        .fila4--space{
            display: block;
            font-size: 9px;
        }

        .fila4--copia{
            display: block;
            text-align: center;
        }

        .fila5--celda1__strong{
            font-weight: bold;
        }

        .fila5--celda1__p{
            margin: 5px 40px 5px 5px;
        
        }

        .fila5--celda1__alerta{
            color: red;
        }
        .fila5--celda1__puntos{
            display: block;
            font-size: 20px;
        
        }

        .tabla2, th, td{
            border-collapse: collapse;
            border-top: 0;
        }

        .tabla2{
            width: 100%;
        }

        .fila10__celda1{
            width: 30%;
        }

        .fila10__celda2{
            width: 15%;
        }

        .fila10__celda3{
            width: 15%;
        }

        .fila10__celda4{
            width: 20%;
            border-bottom: 0;
            text-decoration: underline;
        }

        .fila10_celda4, .fila10__celda5,
        .fila11__celda4, .fila11__celda5,
        .fila12__celda4, .fila12__celda5,
        .fila13__celda4, .fila13__celda5{
            border-top: 0;
            border-bottom: 0;
        }

        .fila10__celda5, .fila11__celda5, .fila12__celda5, .fila13__celda5{
            border-left: 0;
        }

        .fila10__celda4, .fila11__celda4, .fila12__celda4, .fila13__celda4{
            border-right: 0;
        }


    </style>
</head>

<body>
<!--     <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/inicio.php">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/productos.php">Ficha pagos</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/productos.php">Fichadolares</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/productos.php">Consulta</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/cerrar.php">Cerrar sesion</a>
        </div>
    </nav> -->
    


<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $url; ?>/administrador/inicio.php">
          <img src="https://ext2.mapfre.com.br/assistencia/wp-content/uploads/sites/50/2023/02/mawdy.png" alt="polizapdf" class="logo-mawdy">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse div-flex" id="navbarColor01">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $url; ?>/administrador/inicio.php">Inicio
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url; ?>/administrador/seccion/fichapesos.php">Ficha pesos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url; ?>/administrador/seccion/fichadolares.php">Ficha dolares</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url; ?>/administrador/seccion/productos.php">Consulta</a>
                </li> -->
            </ul>
            <ul class="navbar-nav div-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">FA@mawdy24</a>
                    <div class="dropdown-menu">
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="<?php echo $url; ?>/administrador/seccion/cerrar.php">Cerrar</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <div class="container">
        <br />
        <div class="row">

        
<?php 
    session_start();
    if(isset($_SESSION['usuario']) != "Sergio"){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="p-4">
        <ul class="h-menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="portafolio.php">Portafolio</a></li>
            <li><a href="cerrarSesion.php">Cerrra Sesion</a></li>
        </ul>
    </div>
    

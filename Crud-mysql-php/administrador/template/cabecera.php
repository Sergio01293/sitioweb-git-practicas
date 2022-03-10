<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <title>Administrador del sitio web</title>
</head>

<body>
    <!-- Esto se hace ya que en dado caso de querer regresar a una url anterior
    no causaria conflicto ya que como estan en diferentes carpetas, no encontraia la ruta
    por  lo tanto necesitamos una variable para tener ubicada esas carpetas,
    simplemente anadiendole donde estan -->
    <?php $url= "http://".$_SERVER['HTTP_HOST']."/sitioweb-git-practicas/Crud-mysql-php"?>
    <ul class="h-menu bg-light">
        <li><a href="#">Administrador del sitio web</a></li>
        <li><a href="<?php echo $url?>/administrador/inicio.php">Inicio</a></li>
        <li><a href="<?php echo $url?>/administrador/seccion/productos.php">Libros</a></li>
        <li><a href="<?php echo $url?>/administrador/seccion/cerrar.php">Cerrar</a></li>
        <li><a href="<?php echo $url?>">Ver sitio web</a></li>
    </ul>
    <div class="container">
        <div class="row">
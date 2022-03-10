<?php
$servidor = "127.0.0.1";
$bd = "sitio";
$usuario = "root";
$password = "";
try{
    $conexion  = new PDO("mysql:host=$servidor;dbname=$bd", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $ex){
    echo $ex->getMessage();
}

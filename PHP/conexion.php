<?php 

$servidor = "localhost:3310"; # quitar puerto :3310
$user = "root";
$passwd = ""; # poner password
$datab = "notaria_chile";

$conexion = mysqli_connect($servidor,$user,$passwd,$datab) or die ("Ups falló la conexión a la base de datos");

#$conn = new mysqli($servidor, $user, $passwd, $datab);
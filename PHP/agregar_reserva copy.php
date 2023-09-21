<?php 

$nombres = @$_POST["nombres"];
$mailfrom = @$_POST["mailfrom"];
$apellidop = @$_POST["apellidop"];
$apellidom = @$_POST["apellidom"];
$rut = @$_POST["rut"];
$telefono = @$_POST["telefono"];
$region = @$_POST["region"];
$comuna = @$_POST["comuna"];
$direccion = @$_POST["direccion"];
$sexo = @$_POST["sexo"];


$arrayData = [
  "nombre" => $primerNombre,
  "email" => $email,
  "code" => $codigoValidacion,
  "salt" => str_repeat($saltCode, 10)
];

$envioCorreo = envio_pdf( $arrayData );

 if ($envioCorreo) {}


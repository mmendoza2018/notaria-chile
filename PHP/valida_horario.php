<?php 
date_default_timezone_set('America/Santiago');

require_once("conexion.php");

$notaria = $_POST["notaria"]; 
$horario = $_POST["horario"];
$fecha = $_POST["fecha"];

$consulta = "SELECT * FROM reservas WHERE notaria = $notaria AND horario = $horario AND fecha = '$fecha' ";
$resConsulta = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resConsulta) > 0) {
  //ya existe una reserva
  echo json_encode(false);
} else {
  //no existe una reserva
  echo json_encode(true);
}
<?php 
require_once("conexion.php");

$idReserva = $_POST["idReserva"];

$consulta = "UPDATE reservas SET estado = 0 WHERE id = $idReserva";

$resconsulta = mysqli_query($conexion, $consulta);

if ($resconsulta) {
  echo json_encode(true);
} else {
  echo json_encode(false);
}


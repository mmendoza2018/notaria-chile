<?php
require_once("conexion.php");

$fecha = $_POST["fecha"];
$notariaId = $_POST["notariaId"];


#obtenemos todos los horarios 
$conHorarios = "SELECT * FROM horarios WHERE estado = 1";
$resHorarios = mysqli_query($conexion, $conHorarios);

#obtenemos los horarios que ya no estan disponibles por dia 
$conHorarariosOcupados = "SELECT * FROM reservas r INNER JOIN horarios h ON r.horario = h.id WHERE fecha = '$fecha' and notaria = $notariaId";
$resHorariosOcupados = mysqli_query($conexion, $conHorarariosOcupados);

$arrayHorariosGeneral = ["data" => ["fecha" => $fecha, "idNotaria" => $notariaId], "horarios" => []];

foreach ($resHorarios as $horario) {
  $ocupado = false;
  foreach ($resHorariosOcupados as $horarioOcupado) {

    if ($horario["id"] == $horarioOcupado["horario"]) {
      $ocupado = true;
      break;
    }

  }
  if ($ocupado) {
    array_push($arrayHorariosGeneral["horarios"], [
      "estado" => "ocupado",
      "idHorario" => $horario["id"],
      "horario" => $horario["hora"] . " " . $horario["tipo"],
      "fecha" => $fecha,
    ]);
  } else {
    array_push($arrayHorariosGeneral["horarios"], [
      "estado" => "libre",
      "idHorario" => $horario["id"],
      "horario" => $horario["hora"] . " " . $horario["tipo"],
      "fecha" => $fecha,
    ]);
  }
}
 //var_dump($arrayHorariosGeneral);
 # Establecer las cabeceras para indicar que se devuelve JSON
 echo $jsonHorarios = json_encode($arrayHorariosGeneral);


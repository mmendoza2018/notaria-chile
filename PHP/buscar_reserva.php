<?php 
require_once("conexion.php");

$rut = @$_POST["rut"];
$codigoReserva = @$_POST["codigoReserva"];

$consulta = "SELECT r.codigo as codigo, d.nombre as documento, r.fecha as fecha, CONCAT(h.hora, ' ', h.tipo) as hora, u.nombres as nombre, u.rut as rut, u.telefono as telefono, u.mailfrom as correo, r.id as idReserva FROM reservas r 
             INNER JOIN usuarios u ON r.usuario = u.id
             INNER JOIN documentos d ON r.documento = d.id
             INNER JOIN horarios h ON r.horario = h.id
             INNER JOIN notarias n ON r.notaria = n.id
             WHERE u.rut = '$rut' AND r.codigo = '$codigoReserva' AND r.estado = 1";

$resConsulta = mysqli_query($conexion, $consulta);


if (mysqli_num_rows($resConsulta) > 0 ) {
  //encontro una reserva
  $data = null;
  foreach ($resConsulta as $x) {
    $data = [
      "codigo" => $x["codigo"],
      "documento" => $x["documento"],
      "fecha" => $x["fecha"],
      "hora" => $x["hora"],
      "nombre" => $x["nombre"],
      "rut" => $x["rut"],
      "telefono" => $x["telefono"],
      "correo" => $x["correo"],
      "idReserva" => $x["idReserva"],
    ];
  }
  echo json_encode([true, $data]);
} else{
  //no encontro una reserva
  echo json_encode([false, null]);
}
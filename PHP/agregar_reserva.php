<?php 
require_once("conexion.php");
include("reserva_mail.php");

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

$idNotaria = @$_POST["idNotaria"];
$fecha = @$_POST["fecha"];
$idHorario = @$_POST["idHorario"];
$documento_seleccionado = @$_POST["documento_seleccionado"];


 //consulta para sacar el correo de la notaria
 $resNotaria = mysqli_query($conexion, "SELECT * FROM notarias WHERE id = '$idNotaria'");
 $notaria = mysqli_fetch_assoc($resNotaria);

 //consulta para sacar info del documento
 $resDocumento = mysqli_query($conexion, "SELECT * FROM documentos WHERE id = '$documento_seleccionado'");
 $documento = mysqli_fetch_assoc($resDocumento);

 //consulta para sacar info del horario
 $resHorarios = mysqli_query($conexion, "SELECT * FROM horarios WHERE id = '$idHorario'");
 $horario = mysqli_fetch_assoc($resHorarios);


$arrayData = [
  "documento" => $documento["nombre"],
  "fecha" => $fecha,
  "nombre" => $nombres . "" . $apellidop . "" . $apellidom,
  "rut" => $rut,
  "telefono" => $telefono,
  "correo" => $mailfrom,
  "horario" => $horario["hora"] . $horario["tipo"],
];

$envioCorreo = envio_pdf( $arrayData );


 if ($envioCorreo) {

  //insertamos al usuario 
  $conInsertUsu = "INSERT INTO usuarios (
                                        nombres,		
                                        mailfrom,		
                                        apellidop,		
                                        apellidom,	
                                        rut,		
                                        telefono
                                        )
                                        VALUES
                                        (
                                        '$nombres',  
                                        '$mailfrom',  
                                        '$apellidop',  
                                        '$apellidom',  
                                        '$rut',  
                                        '$telefono' 
                                        )";
$resUsuario = mysqli_query($conexion, $conInsertUsu);

if ($resUsuario) {

  // Consulta SQL para obtener el último registro
  $conIdUsu = "SELECT * FROM usuarios ORDER BY id DESC LIMIT 1";
  $resIdUsu = mysqli_query($conexion, $conIdUsu);
  $idUltimoUsu = mysqli_fetch_assoc($resIdUsu)["id"];

  //insertamos la reserva
  $conInsertRe = "INSERT INTO reservas (  
                                    usuario,	
                                    notaria,	
                                    horario,	
                                    fecha
                                    )
                                    VALUES 
                                    (
                                      $idUltimoUsu,
                                      $idNotaria,
                                      $idHorario,
                                      '$fecha'
                                    )";
  $resReserva = mysqli_query($conexion, $conInsertRe);
  echo ($resReserva) ?  json_encode(true) : json_encode(false);
}

   
 } else {
  json_encode(false);
 }


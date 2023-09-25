<?php 
require_once("conexion.php");
require("genera_codigo.php");
require("reserva_mail.php");

$nombres = @$_POST["nombres"];
$correo = @$_POST["mailfrom"];
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

 //generamos el codigo de la reserva
 
$longitud = 10;
$codigoReserva = generarCadenaAleatoria($longitud);

$arrayData = [
  "documento" => $documento["nombre"],
  "fecha" => $fecha,
  "nombre" => $nombres . "" . $apellidop . "" . $apellidom,
  "rut" => $rut,
  "telefono" => $telefono,
  "correo" => $correo,
  "horario" => $horario["hora"] . $horario["tipo"],
  "codigoReserva" => $codigoReserva,
];

$envioCorreo = envio_pdf( $arrayData, $arrayData["correo"] );
$envioCorreo_notaria = envio_pdf_notaria( $arrayData, $notaria["correo"] );

 if ($envioCorreo && $envioCorreo_notaria) {

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
                                        '$correo',  
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
                                    documento,	
                                    fecha,
                                    codigo
                                    )
                                    VALUES 
                                    (
                                      $idUltimoUsu,
                                      $idNotaria,
                                      $idHorario,
                                      $documento_seleccionado,
                                      '$fecha',
                                      '$codigoReserva'
                                    )";
  $resReserva = mysqli_query($conexion, $conInsertRe);
  echo ($resReserva) ?  json_encode(true) : json_encode(false);
}
   
 } else {
  echo json_encode(false);
 }


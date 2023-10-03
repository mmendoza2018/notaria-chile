<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require __DIR__ . '/phpMailer/Exception.php';
require __DIR__ . '/phpMailer/PHPMailer.php';
require __DIR__ . '/phpMailer/SMTP.php';

include_once("plantilla_reserva.php");
include_once("plantilla_reserva_notaria.php");

error_reporting(0);


function envio_pdf($arrayData, $correoEnvio){
  
  $plantilla = plantillaRegistro($arrayData);
  $mail = new PHPMailer(true);
  try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'sistema.gytperu.com';                    // host de quien va brindar el servicio
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'administradorgyt@sistema.gytperu.com';                     // SMTP username
    $mail->Password   = 'administradorGYT';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
    //Recipients
    $mail->setFrom('administradorgyt@sistema.gytperu.com', 'GYT empresarial');
    //personas que recibiran el correo
    $arrayPersonasDestinatario = [
      //["correo" => $arrayData["correo"]],
      ["correo" => $correoEnvio],
    ];
    foreach ($arrayPersonasDestinatario as $x) {
      // Add a recipient
      $mail->AddAddress($x["correo"]);
    }
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'CONTACTO ADN CREATIVO';
    $mail->Body = $plantilla;
    $mail->send();
    return true;
  } catch (Exception $e) {
    return false;
  }
}

function envio_pdf_notaria($arrayData, $correoEnvio){
  $plantilla = plantillaRegistroNotaria($arrayData);
  $mail = new PHPMailer(true);
  try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'sistema.gytperu.com';                    // host de quien va brindar el servicio
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'administradorgyt@sistema.gytperu.com';                     // SMTP username
    $mail->Password   = 'administradorGYT';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
    //Recipients
    $mail->setFrom('administradorgyt@sistema.gytperu.com', 'GYT empresarial');
    //personas que recibiran el correo
    $arrayPersonasDestinatario = [
      //["correo" => $arrayData["correo"]],
      ["correo" => $correoEnvio],
    ];
    foreach ($arrayPersonasDestinatario as $x) {
      // Add a recipient
      $mail->AddAddress($x["correo"]);
    }
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'CONTACTO ADN CREATIVO';
    $mail->Body = $plantilla;
    $mail->send();
    return true;
  } catch (Exception $e) {
    return false;
  }
}


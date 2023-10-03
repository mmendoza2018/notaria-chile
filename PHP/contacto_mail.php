<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require __DIR__ . '/phpMailer/Exception.php';
require __DIR__ . '/phpMailer/PHPMailer.php';
require __DIR__ . '/phpMailer/SMTP.php';

error_reporting(0);
echo envio_pdf();

function envio_pdf(){

  $nombres = $_POST["nombres"];
  $asunto = $_POST["asunto"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];
  
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
      ["correo" => "mendoza.ing1826@gmail.com"],
    ];
    foreach ($arrayPersonasDestinatario as $x) {
      // Add a recipient
      $mail->AddAddress($x["correo"]);
    }
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'CONTACTO ADN CREATIVO';

    $htmlEnvio = "";
    $htmlEnvio .= "<b>Nombres:</b>";
    $htmlEnvio .= "<p>$nombres</p>";
    $htmlEnvio .= "<b>Correo:</b>";
    $htmlEnvio .= "<p>$email</p>";
    $htmlEnvio .= "<b>asunto:</b>";
    $htmlEnvio .= "<p>$asunto</p>";
    $htmlEnvio .= "<b>Mensaje o descripción:</b>";
    $htmlEnvio .= "<p>$mensaje</p>";

    $mail->Body = $htmlEnvio;
    $mail->send();
    return json_encode(true);
  } catch (Exception $e) {
    return json_encode(true);
  }
}

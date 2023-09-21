<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php
/*
require_once('Mail.php');
require_once('Mail/mime.php');

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  
  $destinatario = 'agonzalez@gesnot.cl';

  // Configurar SMTP.
  $parametros_smtp = [
      'host' => 'mail.reservanotaria.cl',
      'port' => 995,
      'auth' => true,
      'username' => 'notificacion@reservanotaria.cl',
      'password' => 'mkFo-+wakA4?',
      'debug' => true,
      'timeout' => 10,
  ];

  // Configurar Envio
  $smtp = Mail::factory('smtp', $parametros_smtp);
  $mime = new Mail_mime(['eol' => '\n']);

  // Cuerpo
  $texto = "Nombre: " . $name . "\n";
  $texto .= "Email: " . $email . "\n";
  $texto .= "Asunto: " . $subject . "\n";
  $texto .= "Mensaje: " . $message . "\n";
  $mime->setTXTBody($texto);
  //$mail->setHTMLBody('<html>...</html>');

  // Generar Cabecera
  $cabecera = $mime->headers([
      'From' => 'ReservaNotaria | GesNot <agonzalez@gesnot.cl>',
      'To' => $destinatario,
      'Reply-To' => $email,
      'Subject' => $subject,
      'Content-Type' => 'text/plain; charset=UTF-8',
      'Content-Transfer-Encoding' => '8bit'
  ]);

  // Generar Mensaje
  $mensaje = $mime->get([
      'text_encoding' => '8bit',
      'text_charset' => 'UTF-8',
      'html_charset' => 'UTF-8',
      'head_charset' => 'UTF-8',
  ]);

  // Enviar el correo electr�nico
  try {
    $status = $smtp->send($destinatario, $cabecera, $mensaje);
    if (PEAR::isError($status)) {
      echo "Ha ocurrido un error al enviar el mensaje. Por favor, intentalo nuevamente.";
   
    } else {
      echo "<script>
        Swal.fire(
          'Correo enviado!',
          'Le enviamos una copia a su correo con los datos de la reserva, recuerde presentarse con anticipación.',
          'success'
        ).then(function() {
          // Mantener al usuario en la misma pagina
        });
      </script>";
    }
  } catch (Exception $ex) {
    echo "Ocurrio una excepci�n: {$ex->getMessage()}.";
  }
}
*/
?>
<?php
$destino = "agonzalez@gesnot.cl";
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$contenido = "Nombre: " . $name . "\nCorreo: " . $email . "\nAsunto: " . $subject . "\nMensaje: " . $message;
mail($destino,"Contacto", $contenido);
header("Location:../gracias.php");
?>

<a href="index.html">Volver a inicio</a>

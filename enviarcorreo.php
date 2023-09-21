<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php

require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';


// Obtener el nombre del archivo PDF adjunto
$file_name = $_GET['file'];
$tarjeta = $_GET['tarjeta'];
$correo = $_GET['correo'];

// Configurar PHPMailer
$mail = new \PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host = 'mail.gesnot.cl';
$mail->SMTPAuth = true;
$mail->Username = 'agonzalez@gesnot.cl';
$mail->Password = '001De4Hy.';
$mail->SMTPSecure = 'ssl';
$mail->Port = 25;

// Establecer los destinatarios, asunto y cuerpo del correo electrónico
$mail->setFrom('ReservaNotaria | GesNot <agonzalez@fdsg.cl>');
$mail->addAddress($correo, 'Notaria');

$mail->Subject = 'Mensaje recibido';
$mail->Body = 'Adjunto encontrarás el documento recibido';

// Adjuntar el archivo PDF
$mail->addAttachment($file_name.$tarjeta);
$mail->$SMTPTimeout = 20;
// Enviar el correo electrónico
if ($mail->send()) {
     // Muestra una alerta con SweetAlert2
     echo "<script>
     Swal.fire(
       '¡Correo enviado!',
       'Gracias por contactarnos',
       'success'
     )
    </script>";
    // echo 'Correo electrónico enviado correctamente';
    // ?>
     <!-- <META http-equiv="Refresh" CONTENT="1; URL=completar_tramite.php"> -->
    <?php
} else {
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Algo salió mal'
      })
    </script>";
    //echo 'Error al enviar el correo electrónico: ' . $mail->ErrorInfo;
    ?>
    <!-- // <META http-equiv="Refresh" CONTENT="1; URL=completar_tramite.php"> -->
    <?php
}

// Eliminar el archivo PDF del servidor
unlink($file_name);
unlink($tarjeta);
?>

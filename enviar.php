<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php

require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';

$nombres = trim($_POST['nombres']);
$mailfrom = trim($_POST['mailfrom']);
$apellidop = trim($_POST['apellidop']);
$apellidom = trim($_POST['apellidom']);
$rut = trim($_POST['rut']);
$telefono = trim($_POST['telefono']);
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
$mail->setFrom('ReservaNotaria | GesNot <agonzalez@sdf.cl>');
$mail->addAddress('notificacion@reservanotaria.cl', 'Notaria');
//$mail->addCC('notificacion@reservanotaria.cl');
$mail->Subject = 'Mensaje recibido';
$mail->Body = 'Adjunto encontrarás el documento recibido  \r\n';
$mail->Body ='Esta reserva fue hecha por: ' .$nombres. ' ' .$apellidop. ' ' .$apellidom.' \r\n';
$mail->Body = 'Rut: ' .$rut. '\r\n';
$mail->Body = 'Correo: ' .$mailfrom. '\r\n';
$mail->Body = 'Telefono de contacto: ' .$telefono. '\r\n';

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
?>

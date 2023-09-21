<?php include_once'./php/conexion.php';?>
<?php

$mailfrom = $_POST['mailfrom'];
$nombres = $_POST['nombres'];
$apellidop = $_POST['apellidop'];
$apellidom = $_POST['apellidom'];
$direccion = $_POST['direccion'];
$rut = $_POST['rut'];
$nompoder = $_POST['nompoder'];
$paternopoder = $_POST['paternopoder'];
$maternopoder = $_POST['maternopoder'];
$rutpoder = $_POST['rutpoder'];
$direcpoder = $_POST['direcpoder'];
$textefectos = $_POST['textefectos'];
$comuna = $_POST['comuna'];
$region = $_POST['region'];
$regionpoder = $_POST['regionpoder'];
$comunapoder = $_POST['comunapoder'];
$sexo = $_POST['sexo'];

//GET
    $nombre = $_GET['nombre'];
    $notaria_seleccionada = $_GET['notaria_seleccionada'];
    $hora = $_GET['hora'];
    $fecha_seleccionada = $_GET['dia'];
    $correo = $_GET['correo'];

    //consulta para sacar el correo de la notaria
    /*$result = mysqli_query($conexion, "SELECT * FROM notarias WHERE nombre = '$notaria_seleccionada'");
    $notaria = $result->fetch_assoc();

    $correo_notaria = $notaria['correo'];*/
    

$dia = date('d');

$mes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$ano = date('Y');

require_once './vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$textefectos = wordwrap($textefectos, 100, "<br />");
$content = '<p style="margin:0cm;margin-bottom:.0001pt;font-size:21px;font-family:Helvetica,sans-serif;text-align:center;">Poder simple</p>
<p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">&nbsp;</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">En Santiago de Chile, a '. $dia .' de  ' . $mes[date('n') - 1] . ' de '.$ano.'</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">&nbsp;</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">Don (do&ntilde;a) : '.$nombres.' '.$apellidop.' '.$apellidom.'</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">C.I. N&ordm; : '.$rut.'</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">Con domicilio en : '.$direccion.'</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">Comuna de : '.$comuna.'</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">De la ciudad de: '.$region.'</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">Viene a conferir poder a </p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">Don (do&ntilde;a) : '.$nompoder.' '.$paternopoder.' '.$maternopoder.'</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">C.I. N&ordm; : '.$rutpoder.'</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">Con domicilio en : '.$direcpoder.'</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">Comuna de : '.$comunapoder.'</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">De la ciudad de: '.$regionpoder.'</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">Para los siguientes efectos: '.$textefectos.'</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;"><br></p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;"><br></p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">El presente poder se otorga con las facultades establecidas en el art&iacute;culo 7&ordm; del C&oacute;digo de Procedimiento Civil.&nbsp;</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;"><br></p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;"><br></p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">_________________________</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Firma del Mandante</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;">&nbsp;</p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;"><strong><em>&nbsp;</em></strong></p>
    <p style="margin:0cm;margin-bottom:.0001pt;font-size:19px;font-family:Helvetica,sans-serif;"><strong>NOTA: Este poder no habilita para asistir a comparendo de conciliaci&oacute;n en representaci&oacute;n del empleador o del trabajador.</strong></p>
';
$dompdf->loadHtml($content);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
ob_clean();
$archivo_pdf = $dompdf->output();
// Guardar el archivo PDF en el servidor
$file_name = 'documento.pdf';
file_put_contents($file_name, $archivo_pdf);


// Segundo FPDF
$dompdf2 = new Dompdf();
$content2 = '<section style="padding:20px 80px">
    <div >
        <h1>Reservación</h1>
    </div>
    <div>
        <p>NOMBRE:' . $nombres . '</p>
        <p>DIA:' . $fecha_seleccionada .'</p>
        <p>HORA' .$hora.'</p>
        <p>TIPO DE DOCUMENTO' .$nombre.'</p>
        <p>NOTARIA SELECCIONADA' .$notaria_seleccionada.'</p>
    </div>
    </section>';
$dompdf2->loadHtml($content2);
$dompdf2->setPaper('A4', 'portrait');
$dompdf2->render();
ob_clean();
$archivo_pdf2 = $dompdf2->output();
$tarjeta = 'reservacion.pdf';
file_put_contents($tarjeta, $archivo_pdf2);

// Redirigir al archivo que enviará el correo electrónico con el archivo PDF adjunto
header("Location: enviarcorreo.php?file=$file_name&tarjeta=$tarjeta&correo=$correo");
exit;

//exit(0);
?>
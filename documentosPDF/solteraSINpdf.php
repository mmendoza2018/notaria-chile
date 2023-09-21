<?php include_once './php/conexion.php'; ?>
<?php

$mailfrom = $_POST['mailfrom'];
$nombres = $_POST['nombres'];
$apellidop = $_POST['apellidop'];
$apellidom = $_POST['apellidom'];
$direccion = $_POST['direccion'];
$rut = $_POST['rut'];
$comuna = $_POST['comuna'];
$region = $_POST['region'];
$telefono = $_POST['telefono'];
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
$content = '<div>
<div style="clear:both;">
    <p style="margin-top:0pt; margin-bottom:0pt;"><img src="https://myfiles.space/user_files/162288_761bfc1c6d0ba27d/1685639581_declaracion-jurada-de-solteria-con-testigos/1685639581_declaracion-jurada-de-solteria-con-testigos-1.png" width="293" height="67" alt=""></p>
</div>
<p style="margin-top:0pt; margin-bottom:0pt;"><span style="font-family:Garamond;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; widows:0; orphans:0; font-size:14pt;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; widows:0; orphans:0; font-size:16pt;"><strong><span style="font-family:Arial;">CERTIFICADO ESTADO CIVIL</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">Por el presente instrumento, comparece ante ** don(a)</span><strong><span style="font-family:Arial;">&nbsp;[compareciente.1.nombre], C&eacute;dula ** ********* N&deg; [compareciente.1.rut],&nbsp;</span></strong><span style="font-family:Arial;">** nacionalidad [compareciente.1.nacionalidad], con ********* en [compareciente.1.direccion], Comuna de [compareciente.1.comuna].</span></p>
<p style="margin-top:0pt; margin-right:2.45pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-right:2.55pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><strong><span style="line-height:150%; font-family:Arial; font-size:11pt;">VENGO A DECLARAR **** FE DE JURAMENTO QUE:</span></strong><strong><span style="font-family:Arial;">&nbsp;</span></strong><span style="font-family:Arial;">M&iacute; ****** civil ****** es&nbsp;</span><strong><span style="font-family:Arial;">SOLTERO(A),&nbsp;</span></strong><span style="font-family:Arial;">adem&aacute;s, no he contra&iacute;do acuerdo de Uni&oacute;n Civil y me encuentro sin responsabilidades ** tutor y/o curador a la fecha.&nbsp;</span></p>
<p style="margin-top:0pt; margin-right:2.45pt; margin-bottom:0pt; text-align:justify; line-height:115%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-right:2.55pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">Se deja constancia, que el/la compareciente formula la presente declaraci&oacute;n jurada, a fin de ser presentada para los ***** legales a que haya lugar. -</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">____________________</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-family:Arial;">Firma</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><strong><span style="font-family:Arial;">Firm&oacute; ante m&iacute; [compareciente.1.nombreInformal]</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">Santiago, [ot.fecha.larga]</span></p>
<p style="margin-top:14pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p></div>
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
        <p>DIA:' . $fecha_seleccionada . '</p>
        <p>HORA' . $hora . '</p>
        <p>TIPO DE DOCUMENTO' . $nombre . '</p>
        <p>NOTARIA SELECCIONADA' . $notaria_seleccionada . '</p>
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
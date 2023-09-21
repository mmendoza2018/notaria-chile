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
$nompropietario = $_POST['nompropietario'];
$rutpropietario = $_POST['rutpropietario'];
$paternopropietario = $_POST['paternopropietario'];
$emailpropietario = $_POST['emailpropietario'];
$maternopropietario = $_POST['maternopropietario'];
$fonopropietario = $_POST['fonopropietario'];
$nomcomprador = $_POST['nomcomprador'];
$rutcomprador = $_POST['rutcomprador'];
$paternocomprador = $_POST['paternocomprador'];
$emailcomprador = $_POST['emailcomprador'];
$maternocomprador = $_POST['maternocomprador'];
$fonocomprador = $_POST['fonocomprador'];
$parentesco = $_POST['parentesco'];

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
    <p style="margin-top:0pt; margin-bottom:0pt;"><img src="https://myfiles.space/user_files/162288_761bfc1c6d0ba27d/1685639375_declaracin-jurada-expensas/1685639375_declaracin-jurada-expensas-1.png" width="293" height="67" alt=""></p>
</div>
<p style="margin-top:0pt; margin-left:141.6pt; margin-bottom:0pt; text-indent:35.4pt; line-height:150%; font-size:18pt;"><a name="_Hlk89074587"><span style="font-family:Arial;">&nbsp;</span></a></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%; font-size:16pt;"><strong><span style="font-family:Arial;">DECLARACI&Oacute;N JURADA</span></strong></p>
<p style="margin-top:0pt; margin-left:141.6pt; margin-bottom:0pt; text-indent:35.4pt; line-height:150%; font-size:18pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:200%; widows:0; orphans:0;"><strong><span style="font-family:Arial;">Yo,</span></strong><strong><span style="font-family:Arial;">&nbsp;&nbsp;</span></strong><strong><span style="font-family:Arial;">[compareciente.1.nombreInformal]</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:200%; widows:0; orphans:0;"><span style="font-family:Arial;">C&eacute;dula de Identidad N&deg;</span><strong><span style="font-family:Arial; color:#2a2a2a;">&nbsp;[compareciente.1.rut]</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:200%; widows:0; orphans:0;"><span style="font-family:Arial;">Domiciliado en</span><span style="font-family:Arial;">&nbsp;&nbsp;</span><span style="font-family:Arial;">[compareciente.1.direccion]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:200%; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><strong><span style="font-family:Arial;">Vengo ** declarar bajo juramento:</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">Que, ** [parentesco] [compareceinte.2], cedula de identidad N&deg;[Rut], vive a *** expensas, por lo que me hago ***** de la alimentaci&oacute;n, salud, vestimenta y ********* otro requerimiento que tuviese, ********* el costo de su manutenci&oacute;n en Chile. &ndash;&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">Realizo la presente declaraci&oacute;n en conformidad ** art&iacute;**** 210 del C&oacute;digo Penal Chileno, asumiendo las Responsabilidades legales. ** extiende la presente declaraci&oacute;n para los fines *** se estimen convenientes.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">____________________</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-family:Arial;">Firma</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><strong><span style="font-family:Arial;">Firm&oacute; ante m&iacute; [compareciente.1.nombreInformal]</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">Santiago, [ot.fecha.larga]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
</div>
<div style="color: red;">Prueba Word to HTML - <a href="https://wordtohtml.net/site/payment">P&aacute;sate a PRO</a>.</div>
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
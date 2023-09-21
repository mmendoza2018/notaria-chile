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
    <p style="margin-top:0pt; margin-bottom:0pt;"><img src="https://myfiles.space/user_files/162288_761bfc1c6d0ba27d/1685541541_carta-poder-auto/1685541541_carta-poder-auto-1.png" width="293" height="67" alt=""></p>
</div>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%; font-size:18pt;"><a name="_Hlk89074587">&nbsp;</a></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; widows:0; orphans:0; font-size:16pt;"><strong><span style="font-family:Arial;">CARTA PODER</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0; font-size:14pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%; widows:0; orphans:0;"><span style="font-family:Arial;">Yo [compareciente.1.nombreInformal]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%; widows:0; orphans:0;"><span style="font-family:Arial;">C&eacute;dula de identidad N&deg; [compareciente.1.rut]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%; widows:0; orphans:0;"><span style="font-family:Arial;">Domiciliada ** [compareciente.1.direccion], digo:</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">Vengo por ** ******** instrumento en conferir ***** especial, **** tan amplio como en derecho ** requiera a don</span><strong><span style="font-family:Arial;">&nbsp;</span></strong><strong><span style="font-family:Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span style="font-family:Arial;">[compareciente.2.nombreInformal], C.I. [compareciente.2.rut],&nbsp;</span></strong><span style="font-family:Arial;">**** que ** m&iacute; nombre y representaci&oacute;n pueda vender, ceder,</span><span style="font-family:Arial;">&nbsp;&nbsp;</span><span style="font-family:Arial;">********** y/o autoadjudicarse ** veh&iacute;culo de mi propiedad: Tipo Veh&iacute;culo: [vehiculo.tipo]</span><strong><span style="font-family:Arial;">,</span></strong><span style="font-family:Arial;">&nbsp;A&ntilde;o:</span><strong><span style="font-family:Arial;">&nbsp;[vehiculo.a&ntilde;o]</span></strong><span style="font-family:Arial;">, Marca:</span><strong><span style="font-family:Arial;">&nbsp;[vehiculo.marca]</span></strong><span style="font-family:Arial;">, Modelo:</span><strong><span style="font-family:Arial;">&nbsp;[vehiculo.modelo]</span></strong><span style="font-family:Arial;">, Nro. Motor:</span><strong><span style="font-family:Arial;">&nbsp;[vehiculo.motor]</span></strong><span style="font-family:Arial;">, Nro. Chasis:</span><strong><span style="font-family:Arial;">&nbsp;[vehiculo.chasis]</span></strong><span style="font-family:Arial;">, Color: [vehiculo.color], Patente: [vehiculo.patente]</span><strong><span style="font-family:Arial;">,</span></strong><span style="font-family:Arial;">&nbsp;pudiendo fijar ** precio ** venta, cobrarlo y percibirlo. ** faculto adem&aacute;s para firmar</span><span style="font-family:Arial;">&nbsp;&nbsp;</span><span style="font-family:Arial;">el contrato de compraventa respectivo, aclararlo, modificarlo, resciliarlo y realizar todos los tramites que sean necesarios, hasta</span><span style="font-family:Arial;">&nbsp;&nbsp;</span><span style="font-family:Arial;">que se realice la inscripci&oacute;n en el registro de veh&iacute;culos motorizados.-</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">** efecto confiero al mandatario todas las facultades necesarias para ** eficaz desempe&ntilde;o de su cometido, incluso las ** firmar los documentos y dem&aacute;s resguardos que se exijan, y en ******* para que ******* todos los tr&aacute;mites que sean necesarios **** dar cumplido t&eacute;rmino al mandato.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">Los tr&aacute;mites que sean necesarios para dar cumplido t&eacute;rmino al mandato.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">Santiago, [ot.fecha.larga]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">____________________</span><span style="font-family:Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-family:Arial;">Firma</span><span style="width:22.19pt; font-family:Arial; display:inline-block;">&nbsp;</span><span style="width:35.4pt; font-family:Arial; display:inline-block;">&nbsp;</span><span style="width:35.4pt; font-family:Arial; display:inline-block;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">Firm&oacute; ante m&iacute;</span><span style="font-family:Arial;">&nbsp;&nbsp;</span><span style="font-family:Arial;">*** [compareciente.1.nombreInformal]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify;"><span style="font-family:Arial;">Santiago, [ot.fecha.larga]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt;"><span style="font-family:Arial;">&nbsp;</span></p>
</div>
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
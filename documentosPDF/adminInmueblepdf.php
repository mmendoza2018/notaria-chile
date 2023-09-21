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
$direccpropiedad = $_POST['direccpropiedad'];
$comunapropiedad = $_POST['comunapropiedad'];

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
    <p style="margin-top:0pt; margin-bottom:0pt;"><img src="https://myfiles.space/user_files/162288_761bfc1c6d0ba27d/1685543144_poder-administracin-inmueble/1685543144_poder-administracin-inmueble-1.png" width="293" height="67" alt=""></p>
</div>
<p style="margin-top:0pt; margin-bottom:0pt; widows:0; orphans:0; font-size:18pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; widows:0; orphans:0; font-size:14pt;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; widows:0; orphans:0; font-size:16pt;"><strong><span style="font-family:Arial;">CARTA PODER</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0; font-size:14pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%; widows:0; orphans:0;"><span style="font-family:Arial;">Yo [compareciente.1.nombreInformal]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%; widows:0; orphans:0;"><span style="font-family:Arial;">C&eacute;dula ** identidad N&deg; [compareciente.1.rut]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%; widows:0; orphans:0;"><span style="font-family:Arial;">Domiciliada en [compareciente.1.direccion], digo:</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">Por el presente instrumento confiero poder especial, pero tan ****** como en derecho se requiera</span><strong><span style="font-family:Arial;">&nbsp;</span></strong><span style="font-family:Arial;">a don [compareciente.2.nombreInformal]</span><strong><span style="font-family:Arial;">&nbsp;</span></strong><span style="font-family:Arial;">C&eacute;dula de identidad N&deg; [compareciente.2.rut]</span><strong><span style="font-family:Arial;">,&nbsp;</span></strong><span style="font-family:Arial; letter-spacing:-0.1pt;">**** que en mi nombre y representaci&oacute;n administre mi propiedad ubicada en</span><span style="font-family:Arial;">&nbsp;[propiedad.administrada], Comuna de [comuna.propiedad],</span><span style="font-family:Arial; letter-spacing:-0.1pt;">&nbsp;quedando expresamente facultado para celebrar contratos de arrendamientos, cobrar y percibir las rentas del arrendamiento, tanto de los contratos que ** hubieren celebrado por el mandante con anterioridad, como de los que se otorgaren en lo sucesivo, fijar forma de pago, ********* ***** o contratos que suscriba, ************ y ponerles t&eacute;rmino por ********* o por cualquier otra causa. Podr&aacute; actuar ante las oficinas ** Energ&iacute;a El&eacute;ctrica, y Agua Potable a fin de repactar pagos de las cuentas de dicha propiedad</span><strong><span style="font-family:Arial; letter-spacing:-0.1pt;">.&nbsp;</span></strong><span style="font-family:Arial; letter-spacing:-0.1pt;">Se faculta adem&aacute;s al mandatario, en ** ejercicio de esta administraci&oacute;n, comparecer ante los Tribunales de Justicia **** solicitar el ************ o las resoluciones de los ********* suscritos en representaci&oacute;n de su mandante.-&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">Al efecto confiero al mandatario todas las facultades necesarias para ** eficaz desempe&ntilde;o ** su cometido, incluso las de firmar los documentos y dem&aacute;s resguardos que se exijan, y en general ejecute todos los tr&aacute;mites *** sean necesarios para dar cumplido t&eacute;rmino al mandato.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">Santiago, [ot.fecha.larga]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">____________________</span><span style="font-family:Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-family:Arial;">Firma</span><span style="width:22.19pt; font-family:Arial; display:inline-block;">&nbsp;</span><span style="width:35.4pt; font-family:Arial; display:inline-block;">&nbsp;</span><span style="width:35.4pt; font-family:Arial; display:inline-block;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">Firm&oacute; ante m&iacute;</span><span style="font-family:Arial;">&nbsp;&nbsp;</span><span style="font-family:Arial;">don [compareciente.1.nombreInformal]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">Santiago, [ot.fecha.larga]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
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
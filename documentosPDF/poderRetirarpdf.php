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
$direccomprador = $_POST['direccomprador'];
$vehiculo = $_POST['vehiculo'];
$marca = $_POST['marca'];
$year = $_POST['year'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$patente = $_POST['patente'];
$motor = $_POST['motor'];
$chasis = $_POST['chasis'];
$direccionvehiculo = $_POST['direccionvehiculo'];
$comunavehiculo = $_POST['comunavehiculo'];

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
    <p style="margin-top:0pt; margin-bottom:0pt;"><img src="https://myfiles.space/user_files/162288_761bfc1c6d0ba27d/1685543044_carta-poder-retirar-auto/1685543044_carta-poder-retirar-auto-1.png" width="293" height="67" alt=""></p>
</div>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; widows:0; orphans:0; font-size:16pt;"><a name="_Hlk89074587"><strong><span style="font-family:Arial;">&nbsp;</span></strong></a></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; widows:0; orphans:0; font-size:16pt;"><strong><span style="font-family:Arial;">***** PODER</span></strong></p>
<p style="margin-top:0pt; margin-left:141.6pt; margin-bottom:0pt; text-indent:35.4pt; line-height:150%; font-size:18pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%; widows:0; orphans:0;"><span style="font-family:Arial;">Por la presente, yo</span><strong><span style="font-family:Arial;">&nbsp;[compareciente.1.nombreInformal]</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%; widows:0; orphans:0;"><span style="font-family:Arial;">C&eacute;dula de Identidad N&ordm; [compareciente.1.rut]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%; widows:0; orphans:0;"><span style="font-family:Arial;">Domiciliada en [compareciente.1.direccion]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">Vengo *** el ******** instrumento en conferir poder especial, amplio y suficiente al/la [Nombre del apoderado], con RUT [RUT del apoderado], domiciliado/a ** [Direcci&oacute;n del apoderado], Chile, para que ** mi nombre y representaci&oacute;n, pueda retirar ** ** custodia del [Nombre del lugar donde se encuentra el veh&iacute;**** en custodia], el veh&iacute;culo de placa [Placa del veh&iacute;culo], marca [Marca del veh&iacute;culo], modelo [Modelo *** veh&iacute;culo], a&ntilde;o [A&ntilde;o del veh&iacute;culo], color [Color del veh&iacute;culo], *** n&uacute;mero de motor [N&uacute;mero de motor] y n&uacute;mero de chasis [N&uacute;mero de chasis], que ** encuentra bajo custodia en dicho lugar.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">El/la apoderado/a estar&aacute; facultado/a **** ******** cualquier **** necesario para ** cumplimiento de lo anteriormente expuesto, incluyendo pero no ********* a presentar la documentaci&oacute;n necesaria, pagar *** tarifas correspondientes, recibir y firmar cualquier ********* relacionado con el retiro *** veh&iacute;culo y realizar cualquier gesti&oacute;n *** sea necesaria para el ************ *** presente mandato.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">**** ***** es v&aacute;lido a partir de la fecha de su ***** y hasta que el veh&iacute;culo haya sido retirado de la custodia del lugar indicado.</span><span style="font-family:Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-family:Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">____________________</span><span style="font-family:Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-family:Arial;">Firma</span><span style="width:25.53pt; font-family:Arial; display:inline-block;">&nbsp;</span><span style="width:35.4pt; font-family:Arial; display:inline-block;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="width:35.4pt; font-family:Arial; display:inline-block;">&nbsp;</span><span style="width:35.4pt; font-family:Arial; display:inline-block;">&nbsp;</span><span style="width:35.4pt; font-family:Arial; display:inline-block;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">Firm&oacute; ante m&iacute; don [compareciente.1.nombreInformal]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">Santiago, [ot.fecha.larga]</span></p>
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
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
$vehiculo = $_POST['vehiculo'];
$marca = $_POST['marca'];
$year = $_POST['year'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$patente = $_POST['patente'];
$motor = $_POST['motor'];
$chasis = $_POST['chasis'];
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
    <p style="margin-top:0pt; margin-bottom:0pt;"><img src="https://myfiles.space/user_files/162288_761bfc1c6d0ba27d/1685542937_carta-poder-alterar-auto/1685542937_carta-poder-alterar-auto-1.png" width="293" height="67" alt=""></p>
</div>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%; font-size:18pt;"><a name="_Hlk89074587">&nbsp;</a></p>
<p style="margin-top:0pt; margin-left:141.6pt; margin-bottom:0pt; text-indent:35.4pt; line-height:150%; font-size:18pt;"><u><span style="font-family:Arial;">Carta Poder</span></u></p>
<p style="margin-top:0pt; margin-left:141.6pt; margin-bottom:0pt; text-indent:35.4pt; line-height:150%; font-size:18pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">*** medio de la presente, yo, [Nombre del otorgante], con RUT [RUT del otorgante], domiciliado/a en [Direcci&oacute;n del otorgante], Chile, otorgo ***** especial, amplio y suficiente al/la [Nombre del apoderado], con RUT [RUT del apoderado], domiciliado/a en [Direcci&oacute;n del apoderado], Chile, para *** en ** nombre y representaci&oacute;n, pueda realizar cualquier tr&aacute;**** necesario para ******* las caracter&iacute;sticas *** veh&iacute;**** de mi propiedad de ***** [Placa del veh&iacute;culo], marca [Marca del veh&iacute;culo], modelo [Modelo del veh&iacute;culo], a&ntilde;o [A&ntilde;o *** veh&iacute;culo], color [Color del veh&iacute;culo], con n&uacute;mero ** motor [N&uacute;mero ** motor] y n&uacute;mero de ****** [N&uacute;mero ** chasis] , de acuerdo a las normativas y regulaciones establecidas por *** autoridades de tr&aacute;nsito en Chile.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">El/la apoderado/a estar&aacute; facultado/a para realizar cualquier acto necesario **** el cumplimiento de lo ************* expuesto, incluyendo pero ** limitando a presentar ** documentaci&oacute;n necesaria, pagar las tarifas correspondientes, recibir y firmar cualquier ********* relacionado con la modificaci&oacute;n de las caracter&iacute;sticas del veh&iacute;culo y realizar cualquier gesti&oacute;n que sea necesaria para el cumplimiento del ******** mandato.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">**** poder es v&aacute;lido a partir de la ***** de ** firma y hasta *** se hayan realizado todas las modificaciones necesarias.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="width:35.4pt; font-family:Arial; display:inline-block;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%;"><strong><span style="font-family:Arial;">___________________________</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%;"><span style="font-family:Arial;">Firm&oacute; **** mi don/a [Nombre del apoderado]</span><strong><span style="font-family:Arial;">,&nbsp;</span></strong><span style="font-family:Arial;">*** [RUT del apoderado]. [Ubicaci&oacute;n y fecha].</span></p>
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
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
$carro = $_POST['carro'];
$marca = $_POST['marca'];
$year = $_POST['year'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$patente = $_POST['patente'];

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
    <p style="margin-top:0pt; margin-bottom:0pt;"><img src="https://myfiles.space/user_files/162288_761bfc1c6d0ba27d/1685639221_declaracin-jurada-carro-de-arrastre/1685639221_declaracin-jurada-carro-de-arrastre-1.png" width="293" height="67" alt=""></p>
</div>
<p style="margin-top:0pt; margin-left:141.6pt; margin-bottom:0pt; text-indent:35.4pt; line-height:150%; font-size:18pt;"><a name="_Hlk89074587">&nbsp;</a></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%; font-size:16pt;"><strong><span style="font-family:Arial;">DECLARACI&Oacute;N JURADA</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:200%; widows:0; orphans:0;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:200%; widows:0; orphans:0;"><strong><span style="font-family:Arial;">Yo,</span></strong><strong><span style="font-family:Arial;">&nbsp;&nbsp;</span></strong><strong><span style="font-family:Arial;">[compareciente.1.nombreInformal]</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:200%; widows:0; orphans:0;"><span style="font-family:Arial;">C&eacute;dula de Identidad N&deg;</span><strong><span style="font-family:Arial; color:#2a2a2a;">&nbsp;[compareciente.1.rut]</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:200%; widows:0; orphans:0;"><span style="font-family:Arial;">*********** en</span><span style="font-family:Arial;">&nbsp;&nbsp;</span><span style="font-family:Arial;">[compareciente.1.direccion]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><strong><span style="font-family:Arial;">Vengo en declarar bajo juramento:</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">Que, soy el &uacute;nico propietario del carro de arrastre que se pasa a singularizar:</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">Patente: [patente], Tipo: [tipo], A&ntilde;o: [ano], Marca: [marca], Modelo: [modelo], Nro. Chasis: [numero.chasis], Color: [color].</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">Que, el carro de arrastre ya indicado, ** utiliza para el transporte de mercanc&iacute;as, y cuenta con ***** los ********** y ******** correspondientes para su uso en v&iacute;as p&uacute;blicas.&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">Se extiende ** presente declaraci&oacute;n **** ser presentada donde estime conveniente. Realizo la presente declaraci&oacute;n en conformidad al art&iacute;culo 2** del C&oacute;**** ***** Chileno, asumiendo las responsabilidades legales.</span><strong><span style="font-family:Arial;">&nbsp;&nbsp;</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">____________________</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-family:Arial;">Firma</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><strong><span style="font-family:Arial;">&nbsp;</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><strong><span style="font-family:Arial;">Firm&oacute; ante m&iacute; [compareciente.1.nombreInformal]</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; widows:0; orphans:0;"><span style="font-family:Arial;">Santiago, [ot.fecha.larga]&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span style="font-family:Arial;">&nbsp;</span></p>
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
header("Location: ./enviarcorreo.php?file=$file_name&tarjeta=$tarjeta&correo=$correo");
exit;

//exit(0);
?>
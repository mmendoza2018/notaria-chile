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
$direcpropietario = $_POST['direcpropietario'];
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
$precio = $_POST['precio'];
$tasacion = $_POST['tasacion'];
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
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:normal;"><img src="https://myfiles.space/user_files/162288_761bfc1c6d0ba27d/1685543066_compra-venta-de-auto/1685543066_compra-venta-de-auto-1.png" width="293" height="67" alt=""></p>
</div>
<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:18pt;">&nbsp;</p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; page-break-after:avoid; line-height:normal; widows:0; orphans:0; font-size:16pt;"><strong><u><span style="font-family:Arial;">COMPRAVENTA ** VEHICULO.</span></u></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">EN SANTIAGO, REP&Uacute;BLICA ** CHILE, a [ot.fecha.larga], entre: don(&ntilde;a) [vendedor.nombreInformal]</span><strong><span style="font-family:Arial; letter-spacing:-0.4pt;">,&nbsp;</span></strong><span style="font-family:Arial; letter-spacing:-0.4pt;">c&eacute;dula de identidad&nbsp;</span><span style="font-family:Arial;">N&deg;[vendedor.rut],&nbsp;</span><span style="font-family:Arial; letter-spacing:-0.4pt;">domiciliado (a) en [vendedor.direccion], como Vendedor, y don (&ntilde;a) [comprador.nombreInformal]</span><strong><span style="font-family:Arial; letter-spacing:-0.4pt;">,&nbsp;</span></strong><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span><span style="font-family:Arial; letter-spacing:-0.4pt;">c&eacute;dula nacional de identidad N&deg; [comprador.rut], domiciliado (a) en [comprador.direccion], **** Comprador, se ha convenido en ** siguiente Contrato de Compraventa:</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><u><span style="font-family:Arial; letter-spacing:-0.4pt;">PRIMERO</span></u><span style="font-family:Arial; letter-spacing:-0.4pt;">: don [vendedor.nombreInformal], vende, cede y transfiere a do&ntilde;a [comprador.nombreInformal]</span><strong><span style="font-family:Arial; letter-spacing:-0.4pt;">,</span></strong><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;***** ****** acepta y adquiere para s&iacute;, el siguiente veh&iacute;culo:</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">Tipo:</span><strong><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;[vehiculo.tipo],&nbsp;</span></strong><span style="font-family:Arial; letter-spacing:-0.4pt;">Marca</span><strong><span style="font-family:Arial; letter-spacing:-0.4pt;">: [vehiculo.marca],&nbsp;</span></strong><span style="font-family:Arial; letter-spacing:-0.4pt;">Modelo:&nbsp;</span><strong><span style="font-family:Arial; letter-spacing:-0.4pt;">[vehiculo.modelo]</span></strong><span style="font-family:Arial; letter-spacing:-0.4pt;">,N&ordm; Motor: [vehiculo.motor] N&ordm; Chasis: [vehiculo.chasis], ***** [vehiculo.color], A&ntilde;o [vehiculo.a&ntilde;o]</span><strong><span style="font-family:Arial; letter-spacing:-0.4pt;">,</span></strong><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;Placa</span><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;&nbsp;</span><span style="font-family:Arial; letter-spacing:-0.4pt;">Patente &Uacute;nica</span><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;&nbsp;</span><span style="font-family:Arial; letter-spacing:-0.4pt;">e Inscripci&oacute;n [vehiculo.patente]</span><strong><span style="font-family:Arial; letter-spacing:-0.4pt;">,&nbsp;</span></strong><span style="font-family:Arial; letter-spacing:-0.4pt;">inscrito en el R.V.M..</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">******* de Circulaci&oacute;n: Municipalidad de&nbsp;</span><span style="width:24.36pt; font-family:Arial; letter-spacing:-0.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; font-family:Arial; letter-spacing:-0.4pt; display:inline-block;">&nbsp;</span><span style="font-family:Arial; letter-spacing:-0.4pt;">, a&ntilde;o 2020.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><u><span style="font-family:Arial; letter-spacing:-0.4pt;">SEGUNDO</span></u><span style="font-family:Arial; letter-spacing:-0.4pt;">: El ****** de esta transferencia ** la suma de&nbsp;</span><strong><span style="font-family:Arial; letter-spacing:-0.4pt;">$[vehiculo.precioVenta].- ([vehiculo.precioVenta.texto]),&nbsp;</span></strong><span style="font-family:Arial; letter-spacing:-0.4pt;">que el comprador paga en este acto, al contado, ** ******** al Vendedor, declarando &eacute;ste &uacute;ltimo recibirlo a ** entera y total satisfacci&oacute;n.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><u><span style="font-family:Arial; letter-spacing:-0.4pt;">TERCERO</span></u><span style="font-family:Arial; letter-spacing:-0.4pt;">: Declara el ******** que ** veh&iacute;culo objeto de esta compraventa no tiene deudas ni grav&aacute;menes ** ******* especie y esto constituye causal determinante para la celebraci&oacute;n *** presente contrato.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><u><span style="font-family:Arial; letter-spacing:-0.4pt;">CUARTO</span></u><span style="font-family:Arial; letter-spacing:-0.4pt;">: La ******* material del veh&iacute;culo ** efect&uacute;a en este mismo acto ** Comprador, quien declara ********* a su entera y ***** satisfacci&oacute;n.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><u><span style="font-family:Arial; letter-spacing:-0.4pt;">QUINTO</span></u><span style="font-family:Arial; letter-spacing:-0.4pt;">: Las partes ************ declaran bajo fe de juramento y apercibimiento del Art. 2** del C&oacute;digo de ************* Penal, que los datos suministrados **** la confecci&oacute;n del presente contrato en cuanto a la individualizaci&oacute;n de las partes, datos del veh&iacute;culo, precio y dem&aacute;s condiciones ********* son ************* fidedignas.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><u><span style="font-family:Arial; letter-spacing:-0.4pt;">SEXTO</span></u><span style="font-family:Arial; letter-spacing:-0.4pt;">: El Comprador ******* expresamente que se responsabiliza ** ********* siniestro, accidente, da&ntilde;o e indemnizaci&oacute;n de ********** que pudieran producirse a terceros, tanto en su persona f&iacute;sica **** ** sus bienes, con motivo *** uso y conducci&oacute;n del veh&iacute;culo individualizado en la cl&aacute;usula Primera.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">Esta responsabilidad la adquiere por las sanciones, penas o multas por infracciones a las leyes *** tr&aacute;nsito o a los *********** municipales, debiendo comparecer en su calidad de comprador **** las *********** que corresponda para asumir las responsabilidades que asume en este acto, en *** ** de por recibida a entera satisfacci&oacute;n este veh&iacute;culo, sin que le asista derecho a ******** posteriores ***** ** mismo.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><u><span style="font-family:Arial; letter-spacing:-0.4pt;">SEPTIMO</span></u><span style="font-family:Arial; letter-spacing:-0.4pt;">: Para ***** los efectos legales derivados del presente contrato *** partes fijan domicilio ** la ciudad ** Santiago y se ******* a ** jurisdicci&oacute;n de sus Tribunales ordinarios ** Justicia.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><u><span style="font-family:Arial; letter-spacing:-0.4pt;">OCTAVO</span></u><span style="font-family:Arial; letter-spacing:-0.4pt;">: Se faculta al portador de copia autorizada del presente instrumento para solicitar y firmar las inscripciones procedentes ante el Registro ******** ** Veh&iacute;culos Motorizados del Servicio ** Registro Civil e Identificaci&oacute;n.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><u><span style="font-family:Arial; letter-spacing:-0.4pt;">NOVENO</span></u><span style="font-family:Arial; letter-spacing:-0.4pt;">: ** virtud de que las partes presentan Certificado de Multas pagadas, liberan a esta Notar&iacute;a de toda responsabilidad relacionada *** esta materia, haci&eacute;ndose ***** la parte vendedora, de toda responsabilidad pecuniaria por ****** impagas que recaigan sobre el veh&iacute;culo materia de este contrato.</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial; letter-spacing:-0.4pt;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><strong><span style="font-family:Arial;">Tasaci&oacute;n: $[vehiculo.tasacionFiscal].-</span></strong></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">____________________</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-indent:35.4pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">Vendedor</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">____________________</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="width:35.4pt; font-family:Arial; display:inline-block;">&nbsp;</span><span style="font-family:Arial;">Comprador</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">Autorizo el contrato que antecede, en virtud de haberse acreditado el pago del Impuesto correspondiente al 1.5% Municipal por la suma de&nbsp;</span><strong><span style="font-family:Arial;">$ [vehiculo.impuesto].-&nbsp;</span></strong><span style="font-family:Arial;">mediante F 23 con fecha __________________ en el Banco de&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">Autorizo con esta fecha. Santiago, [ot.fecha.larga]</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:12pt;">&nbsp;</p>
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
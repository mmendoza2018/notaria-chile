<?php include 'php/conexion.php'; ?>
<?php
if (isset($_POST['botondatos'])) {
    if (strlen($_POST['nombres']) >= 1 && strlen($_POST['mailfrom']) >= 1 && strlen($_POST['apellidop']) >= 1 && strlen($_POST['apellidom']) >= 1 && strlen($_POST['rut']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_GET['nombre']) >= 1 && strlen($_GET['nombrenot']) >= 1 && strlen($_GET['hora']) >= 1 && strlen($_GET['dia']) >= 1 && strlen($_GET['mes']) >= 1 && strlen($_GET['anio']) >= 1) {
        $nombres = trim($_POST['nombres']);
        $mailfrom = trim($_POST['mailfrom']);
        $apellidop = trim($_POST['apellidop']);
        $apellidom = trim($_POST['apellidom']);
        $rut = trim($_POST['rut']);
        $telefono = trim($_POST['telefono']);
        $nombre = trim($_GET['nombre']);
        $nombrenot = trim($_GET['nombrenot']);
        $hora = trim($_GET['hora']);
        $fecha_seleccionada = trim($_GET['dia']);
        $mes = trim($_GET['mes']);
        $anio = trim($_GET['anio']);
        $fechareg = date("d/m/y");
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $mes_convert = $meses[$mes - 1];
        $fecha_formateada = "$fecha_seleccionada  de $mes_convert del $anio";
        $consulta = "INSERT INTO datos(nombres, mailfrom, apellidop, apellidom, rut, telefono, nombre, notaria_seleccionada, hora, fecha_seleccionada, fecha_reg) VALUES ('$nombres','$mailfrom','$apellidop','$apellidom','$rut','$telefono','$nombre','$nombrenot','$hora','$fecha_formateada','$fechareg')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
?>
            <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=gracias.php">
        <?php
        } else {
        ?>
            <h3 class="bad" style="text-align:center; margin-top: 30px;">¡Ups ha ocurrido un error!</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="bad" style="text-align:center; margin-top: 30px;">¡Por favor complete los campos!</h3>
<?php
    }
}
?>
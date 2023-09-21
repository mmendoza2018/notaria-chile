<?php include 'header.php'; ?>
<?php include_once 'php/conexion.php'; ?>


<?php
// Convierte la fecha a un timestamp
date_default_timezone_set('America/Santiago');
setlocale(LC_TIME, 'es.UTF-8', 'esp');

if (isset($_GET['idNotaria']) && isset($_GET['fecha']) && isset($_GET['idHorario']) && isset($_GET['documento_seleccionado'])) {

  $idNotaria = $_GET["idNotaria"];
  $fecha = $_GET["fecha"];
  $idHorario = $_GET["idHorario"];
  $documento_seleccionado = $_GET["documento_seleccionado"];


  //consulta para sacar el correo de la notaria
  $resNotaria = mysqli_query($conexion, "SELECT * FROM notarias WHERE id = '$idNotaria'");
  $notaria = mysqli_fetch_assoc($resNotaria);

  //consulta para sacar info del documento
  $resDocumento = mysqli_query($conexion, "SELECT * FROM documentos WHERE id = '$documento_seleccionado'");
  $documento = mysqli_fetch_assoc($resDocumento);

  //consulta para sacar info del horario
  $resHorarios = mysqli_query($conexion, "SELECT * FROM horarios WHERE id = '$idHorario'");
  $horario = mysqli_fetch_assoc($resHorarios);

  $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

  $mes = date("n", strtotime($fecha));
  $dia = date("d", strtotime($fecha));
  $anio = date("Y", strtotime($fecha));

  $fecha_formateada = $dia . " de " . $meses[$mes - 1] . " del " . $anio;
} else {
  // Redirigir al usuario al formulario tipo_documento
  header('Location: tipo_documento.php');
  exit();
}
?>

<body>
  <br><br>
  <!-- ======= Breadcrumbs ======= -->
  <div class="container">
    <br><br>
    <div class="d-flex flex-row-reverse align-items-center">

      <a href="javascript:history.back()">Volver a pagina anterior</a>
    </div> <!---AQUI-->
  </div>
  <br><br>

  <main id="main"">

    <div class=" col-lg-13 align-text-center ">
      <div class=" card col-lg-4 margin-left mx-auto" style="background-color: #1b76de;">
    <div class="card-header">
      <h2 style="color: white;" class="text-center">Resumen del trámite:</h2>
    </div>
    <ul class="list-group list-group-flush text-center">
      <li class="list-group-item">
        Documento seleccionado: <?php echo $documento["nombre"]  ?>
      </li>
      <li class="list-group-item">Notaria: <?php echo $notaria["nombre"]; ?>, <?php echo $notaria["direccion"]; ?> , <?php echo $notaria["comuna"]; ?> </li>
      <li class="list-group-item"><?php echo $fecha_formateada; ?> a las: <?php echo $horario["hora"] . $horario["tipo"]; ?></li>
    </ul>
    </div>
    </div>

    <section>
      <div class="row justify-content-center align-text-left" style="margin-left: 60px; margin-right: 60px;">
        <form id='formReserva' class='border shadow row' onsubmit="enviarFormularioReserva()">;
          <h4 style="margin-top: 20px;"><b>Datos del solicitante</b></h4>
          <br><br><br>
          <div class="form-group col-md-6 ">
            <label for="name">Nombres</label>
            <input type="text" name="nombres" data-validate class="form-control" id="nombres">
          </div>
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" data-validate name="mailfrom" id="mailfrom">
          </div>
          <div class="form-group col-md-6">
            <label for="apellidop">Apellido Paterno</label>
            <input type="text" class="form-control" data-validate name="apellidop" id="apellidop">
          </div>
          <div class="form-group col-md-6">
            <label for="apellidom">Apellido Materno</label>
            <input type="text" class="form-control" data-validate name="apellidom" id="apellidom">
          </div>
          <div class="form-group col-md-6">
            <label for="rut">RUT</label>
            <input type="text" class="form-control" data-validate value="69785946-2" name="rut" id="inputRut" maxlength="12">
          </div>
          <div class="form-group col-md-6">
            <label for="telefono">Teléfono</label>
            <input type="tel" class="form-control" data-validate name="telefono" id="telefono">
          </div>
          <div class="form-group col-md-6">
            <label for="regiones">Región</label>
            <select id="regiones" type="text" class="form-select" data-validate name="region"></select>
          </div>

          <div class="form-group col-md-6">
            <label for="comunas">Comuna</label>
            <select id="comunas" type="text" class="form-select" data-validate name="comuna"></select>
          </div>

          <div class="form-group col-md-6">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" data-validate name="direccion" id="direccion">
          </div>

          <div class="form-group col-md-6">
            <label for="sexo">Sexo</label>
            <div class="control">
              <label class="radio">
                <input class="form-check-input" type="radio" data-validate name="sexo" value="Masculino">
                Masculino
              </label>
              <label class="radio">
                <input class="form-check-input" type="radio" data-validate name="sexo" value="Femenino">
                Femenino
              </label>
            </div>
          </div>
          <br><br><br>

          <?php
          // include 'formularios.php';
          ?>

          <div class="section">
            <button name="botondatos" type="submit" class="btn btn-primary" id="btn-valida-rut">Continuar</button>
          </div>
          <br><br>
        </form>
        <div class="salida"></div>
        <?php include 'datos.php'; ?>
      </div>
    </section>

  </main>
  <!-- ======= Footer ======= -->
  <?php
  include 'contacto.php';
  include 'footer.php';
  ?>
  <script src="script.js"></script>
  <script src="script2.js"></script>
  <script src="cambiarAction.js"></script>
</body>

</html>
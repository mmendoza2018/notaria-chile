<?php include_once 'php/conexion.php'; ?>
<?php
date_default_timezone_set('America/Santiago');
include 'verificarPaso.php';

//TRAIGO LOS DATOS DESDE EL URL Y LOS COLOCO DENTRO DE VARIABLES
if (isset($_GET['nombre']) && isset($_GET['notaria_seleccionada']) && isset($_GET['nombrenot']) && isset($_GET['direccion']) && isset($_GET['comuna'])) {
  $documento_seleccionado = $_GET['documento_seleccionado'];
  $nombre = $_GET['nombre'];
  $notaria_seleccionada = $_GET['notaria_seleccionada'];
  $nombrenot = $_GET['nombrenot'];
  $direccion = $_GET['direccion'];
  $comuna = $_GET['comuna'];
} else {
  // Redirigir al usuario al formulario tipo_documento
  header('Location: tipo_documento.php');
  exit();
}

?>

<?php
include 'header.php';
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
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->

    <div class="texto-formateado">
      <h1 class="text-center">
        Seleccione el día de su visita:
      </h1><br>
      <div class="center">
        <?php

        // Establecemos la configuración regional en español

        // Obtenemos la fecha actual
        $hoy = new DateTime();

        // Creamos un array para almacenar las fechas
        $fechas = array();

        // Array de nombres de días en español
        $nombresDias = array(
          "lun.",
          "mar.",
          "mié.",
          "jue.",
          "vie.",
          "sáb.",
          "dom."
        );

        // Agregamos la fecha actual al array con el día de la semana abreviado en español
      /*   $fechas[] = array(
          "dia" => $nombresDias[$hoy->format('N') - 1], // 'N' devuelve el número del día de la semana (1 para lunes, 2 para martes, etc.)
          "fecha" => $hoy->format('Y-m-d')
        );
 */
        $diasCompletos = 0; //cuantos dias ya hay en el arreglo
        // Agregamos las tres fechas siguientes al array
        while ($diasCompletos < 4) {
          $hoy->add(new DateInterval('P1D')); // Sumamos un día
          $numeroDiaSemana = $hoy->format("N");
          //si el sabado(6) o domingo (7) ignora esos dias 
          if ($numeroDiaSemana != "6" && $numeroDiaSemana != "7") {
            $fechas[] = array(
              "dia" => $nombresDias[$hoy->format('N') - 1], // Día de la semana abreviado en español
              "fecha" => $hoy->format('Y-m-d')
            );
            $diasCompletos ++;
          }
        }

        // Imprimimos las fechas
        foreach ($fechas as $fecha) {
          $fechaItem = $fecha["fecha"];
          $diaNumber = date('d', strtotime($fechaItem));
          $diaString = $fecha["dia"];

          echo "<a class='h3 center' style='border:#0d6efd 5px solid;' type='button' onclick='obtenerHorarios(this)' id='fechahora' data-date='$fechaItem' data-notaria='$notaria_seleccionada'> $diaString <br> $diaNumber </a>";
        }

        ?>
      </div>

    </div>


    <div class="texto-formateado">
      <h2 class="text-center">
        Seleccione la hora que más le acomode:
      </h2>
    </div><br>
    <div class="center col-lg-12">
      <div id="contentHours">

      </div>

      <?php
      // Obtener la hora actual del servidor 
      date_default_timezone_set('America/Santiago');

      // Cerrar conexión  
      mysqli_close($conexion);
      ?>
      <br>
    </div>

  </main>



  <style>
    .h3 {
      border: 1px solid black;
      padding: 8px 10px;
      width: 80px;
      font-size: 14px;
      color: #000;
      margin-right: 20px;
      border-radius: 3px;
      background-color: transparent;
      display: inline-block;
    }

    .h3:hover {
      color: #fff;
      background-color: #0d6efd;
    }

    .center {
      display: flex;
      justify-content: center;
    }
  </style>

  <!-- ======= Footer ======= -->
  <?php
  include 'contacto.php';
  include 'footer.php';
  ?>
</body>

</html>
<?php include_once 'php/conexion.php'; ?>
<?php
/*include 'verificarPaso.php';
verificarPaso(2, 1);

if (isset($_SESSION['paso1'])) {
  var_dump($_SESSION['paso1']);
} else {
  echo 'Paso 1 no completado';
}*/

if (isset($_POST['formulario1_completado']) && $_POST['formulario1_completado'] === 'true') {
} else {
  // Redirigir al usuario al formulario tipo_documento
  header('Location: tipo_documento.php');
  exit();
}
?>
<?php
//TRAIGO LOS DATOS DESDE EL URL Y LOS COLOCO DENTRO DE VARIABLES
if (isset($_GET['tipo_documento'])) {
  $tipo_documento = $_GET['tipo_documento'];
}

// Ejecutar una consulta SQL
$resultado = mysqli_query($conexion, "SELECT * FROM documentos WHERE tipo = '$tipo_documento'");
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
  <br>
  <main id="main">

    <!-- Formulario de búsqueda -->
    <?php

    // Si se ha enviado el formulario de búsqueda, realizar la consulta a la base de datos
    if (isset($_POST['submit'])) {
      $busqueda = mysqli_real_escape_string($connection, $_POST['busqueda']);
      $query = "SELECT * FROM documentos WHERE nombre LIKE '%" . $busqueda . "%'";
      $result = mysqli_query($connection, $query);
    }

    ?>
    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
      <!-- Formulario de búsqueda -->
      <form action="" class="col-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center" method="post" role="search">
        <input type="search" class="p-3 m-2 flex-fill justify-content-center" name="busqueda" placeholder="Buscar en ReservaNotaria">
        <button class="btn btn-outline-primary m-2" type="submit" name="submit">Buscar</button>
      </form>
      <!-- Mostrar resultados de la búsqueda -->
      <?php if (isset($result) && mysqli_num_rows($result) > 0) : ?>
        <h2>Resultados de la búsqueda</h2>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
          <h3><strong><a href="mostrar_documento.php?documento_seleccionado=<?php echo $row['id']; ?>&nombre=<?php echo $row['nombre']; ?>" <h3><?php echo $row['nombre']; ?> </h3><br></strong></h3>
          </a>
        <?php endwhile; ?>
      <?php else : ?>

      <?php endif; ?>

    </div>


    <br><br>
    <center>
      <div class="texto-formateado">
        <strong>
          <h2>DOCUMENTOS DISPONIBLES PARA TI: </h2>
        </strong>
      </div>
    </center>
    <br>

  </main>

  <center>
    <!--CARD PARA TRAER LAS NOTARIAS-->
    <?php


    // Ejecutar una consulta SQL
    $resultado = mysqli_query($conexion, "SELECT * FROM documentos WHERE tipo = '$tipo_documento'");

    // Inicializar un contador
    $contador = 0;

    // Iterar a través de los resultados y mostrar cada elemento "card"
    while ($fila = mysqli_fetch_array($resultado)) {
      if ($contador % 4 == 0) {
        // Inicio de una nueva fila
        echo '
        <div class="row justify-content-stretch">
        ';
      }
      // Mostrar un elemento "card"
      echo '<div class="col-lg-3 col-md-6 d-flex justify-content-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
      <form method="post" action="mostrar_documento.php?documento_seleccionado=' . $fila['id'] . '&id=' . $fila['id'] . '&nombre=' . $fila['nombre'] . '">
      <input type="hidden" name="formulario2_completado" value="true">';
      echo '<div class="btn btn-light card border-primary mb-3" style="width: 25rem; height: 12rem;">';
      echo '<div class="card-body texto-formateado" data-aos="zoom-in" data-aos-delay="200">';
      echo '<br>';
      echo '<h5 class="v" style="color: #444444"><strong>' . $fila['nombre'] . '</strong></h5>';
      echo '<br>
      <button class="btn btn-primary" type="submit"><h6>Ver mas información...</h6></button>';
      //echo '<a href="mostrar_documento.php?documento_seleccionado=' . $fila['id'] . '&id=' . $fila['id'] . '&nombre=' . $fila['nombre'] . '" class="btn btn-primary"><h6>Ver mas información...</h6></a>';
      echo '</div>';
      echo '</div>
      </form>';
      echo '</div>';
      $contador++;
      if ($contador % 4 == 0) {
        // Fin de la fila
        echo '</div>';
      }
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);

    ?>
  </center>

  <?php
  include 'contacto.php';
  include 'footer.php';
  ?>
  <!-- End Contact Section -->

</body>
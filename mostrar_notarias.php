<?php
// Conectar a la base de datos
require_once("php/conexion.php");

// Obtener los productos de la base de datos
$resultado = mysqli_query($conexion, "SELECT * FROM notarias");
$productos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
?>

<?php

//TRAIGO LOS DATOS DESDE EL URL Y LOS COLOCO DENTRO DE VARIABLES
if (isset($_GET['documento_seleccionado']) && isset($_GET['nombre'])) {
  $documento_seleccionado = $_GET['documento_seleccionado'];
  $nombre = $_GET['nombre'];
} else {
  // Redirigir al usuario al formulario tipo_documento
  echo "aqui";
  //header('Location: tipo_documento.php');
  exit();
}
?>

<?php
// Recoge el ID del documento seleccionado del formulario
//$id = $_GET['notaria_seleccionada'];

// Ejecutar una consulta SQL
/*$result = mysqli_query($conexion, "SELECT * FROM notarias WHERE id = '$id'");
$documento = $result->fetch_assoc();*/

?>

<?php
include 'header.php';
?>

<body>
  <br><br>
  <!-- ======= Breadcrumbs ======= -->
  <div class="container">
    <br><br>
    <div class="d-flex justify-content-between align-items-center">
      <h2>Seleccion de Notarias</h2>
      <a href="javascript:history.back()">Volver a pagina anterior</a>
    </div> <!---AQUI-->
  </div>
  <br><br>
  <main id="main">


    <div class="container">
      <form method="post" action="">
        <label for="categoria">Filtrar por categoría:</label>

        <select name="categoria" id="categoria" class="form-select" onchange="this.form.submit()">
          <option value="">Todas las comunas</option>
          <?php
          $comunas = mysqli_query($conexion, "SELECT DISTINCT comuna FROM notarias");
          // Mostrar cada comuna como una opción en el filtro
          while ($comuna = mysqli_fetch_array($comunas)) {
            $selected = '';
            if (isset($_POST['categoria']) && $_POST['categoria'] == $comuna['comuna']) {
              $selected = 'selected';
            }
            echo '<option value="' . $comuna['comuna'] . '"' . $selected . '>' . $comuna['comuna'] . '</option>';
          }
          ?>
        </select>
      </form>

      <?php

      // Obtener la categoría seleccionada (si hay una)
      $categoria = $_POST["categoria"] ?? "";

      // Filtrar los productos según la categoría
      if ($categoria) {
        $productos_filtrados = array_filter($productos, function ($producto) use ($categoria) {
          return $producto["comuna"] === $categoria;
        });
      } else {
        $productos_filtrados = $productos;
      }

      $contador = 0;

      // Mostrar la lista de productos filtrados 
      foreach ($productos_filtrados as $producto) {
        if ($contador % 3 == 0) {
          // Inicio de una nueva fila
          echo '<div class="row my-3">';
        }
        // Mostrar un elemento "card"
    // echo '<div class="col-lg-3 col-md-6 d-flex justify-content-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        echo '<div id="tarjetas-container" class="d-flex justify-content-center col-lg-4 col-md-6">
  <form method="post" class="col-lg-11 col-10 col-md-12 col-sm-9" action="mostrar_horas.php?documento_seleccionado=' . $documento_seleccionado . '&nombre=' . $nombre . '&nombrenot=' . $producto['nombre'] . '&notaria_seleccionada=' . $producto['id'] . '&comuna=' . $producto['comuna'] . '&direccion=' . $producto['direccion'] . '">
    <div class="card text-bg-light mb-3 text-center" style="max-width: 23rem;">';
        echo '  <h4><div class="card-header ">' . $producto['comuna'] . '</div></h4>
      <div class="card-body">';
        echo '      <h6 class="card-subtitle mb-2 text-muted">' . $producto['direccion'] . '</h6>';
        echo '      <h5 class="card-title">' . $producto['nombre'] . '</h5> <hr>';
        echo '      <p class="card-text">' . $producto['referencia'] . '</p>
          <table class="mx-auto">
          <tr> 
          <td><a href="https://www.google.com/maps/search/' . urlencode($producto['direccion']) . '" target="_blank" class="btn btn-outline-primary">Ver Mapa</a></td>';
        echo '<td style="margin-left: 10px"><button class="btn btn-outline-warning" type="submit"><h6>Continuar</h6></button></td>
  </tr>
  </table>
  </div>
  </div>
  </form>
  </div>';
        $contador++;
        if ($contador % 3 == 0) {
          // Fin de la fila
          echo '</div>';
        }
        //echo "<p>{$producto["comuna"]} ({$producto["nombre"]})</p>";
      }
      ?>
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include 'contacto.php';
  include 'footer.php';
  ?>





</body>

</html>
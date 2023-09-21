<?php include_once 'php/conexion.php'; ?>
<?php

if (isset($_POST['formulario2_completado']) && $_POST['formulario2_completado'] === 'true') {
  // Resto del código del formulario 2
} else {
  // Redirigir al usuario al formulario tipo_documento
  header('Location: tipo_documento.php');
  exit();
}

?>

<?php

//TRAIGO LOS DATOS DESDE EL URL Y LOS COLOCO DENTRO DE VARIABLES
if (isset($_GET['documento_seleccionado']) && isset($_GET['nombre'])) {
  $documento_seleccionado = $_GET['documento_seleccionado'];
  $nombre = $_GET['nombre'];
}

// Recoge el ID del documento seleccionado del formulario
$id = $_GET['documento_seleccionado'];

// Ejecutar una consulta SQL
$result = mysqli_query($conexion, "SELECT * FROM documentos WHERE id = '$id'");
$documento = $result->fetch_assoc();
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


    <br>
    <h2 class="text-center">Usted Selecciono:</h2>



    <div class="container">
      <p>
        <?php
        # TRAE MIS DATOS DESDE MYSQL Y LOS MUESTRA EN PANTALLA

        echo ' <strong><center><h1>' . $documento['nombre'] . '</h1><br></center></strong> <br>';

        echo '<h2>Descripcion de Documento:</h2><p>' . $documento['descripcion'] . '</p>';

        echo '<h2>Requerimientos:</h2><p>' . $documento['requerimientos'] . '</p>';
        ?>
        <img src="<?php echo $documento['ruta']; ?>" style="width:500px">

        <?php echo '</table>'; ?>

        <br>
        <center>


          <label>He leído y comprendo los requerimientos &nbsp;</label>
          <input type="checkbox" name="acepto_chk" id="acepto_chk" onchange="activarBoton()" value="1" required>

        </center>
        <br>
      </p>
    </div>

    <center>
      <table>
        <tr>
          <td><a href="index.php"><button type="submit" class="btn btn-outline-primary"  name="submit">
          Volver al Inicio 
        </button></a></td>
          <td style="padding-left: 10px;"></td> <!-- Espacio entre los botones -->
          <td>
            <form method="get" action="mostrar_notarias.php" id="my-form">
              <input type="hidden" name="documento_seleccionado" value="<?= $documento_seleccionado ?>">
              <input type="hidden" name="nombre" value="<?= $nombre ?>">
              <button type="submit" class="btn btn-outline-success" id="button" disabled>Continuar</button>
            </form>
          </td>
        </tr>
      </table>
    </center>
<br><br>
  </main><!-- End #main -->


</body>
<script>
  //activar el boton cuando le den chck a "He leído y comprendo los requerimientos"
  function activarBoton() {
    var boton = document.getElementById("button");
    var checkbox = document.getElementById("acepto_chk");

    if (checkbox.checked) {
      boton.disabled = false;
    } else {
      boton.disabled = true;
    }
  }
</script>

</html>
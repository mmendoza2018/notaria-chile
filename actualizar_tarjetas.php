<?php
// Obtener la comuna seleccionada de la solicitud AJAX
$comunaSeleccionada = $_GET['comuna'];

$conexion = mysqli_connect("localhost", "root", "12345678", "notaria");
// Construir una consulta SQL para obtener las notarias en la comuna seleccionada
$sql = "SELECT * FROM notarias WHERE comuna = '$comunaSeleccionada'";

// Ejecutar la consulta SQL y obtener los resultados
$resultados = mysqli_query($conexion, $sql);

// Construir el HTML para las tarjetas actualizadas
$html = '';
while ($notaria = mysqli_fetch_array($resultados)) {
   $html .= '<div>';
  $html .= '<div class="card text-bg-light mb-3 text-center" style="max-width: 23rem;">';
  $html .= '<div class="card-body">';
  $html .= '<h5 class="card-title">' . $notaria['nombre'] . '</h5>';
  $html .= '<p class="card-text">' . $notaria['direccion'] . '</p>';
  $html .= '</div>';
  $html .= '</div>';
  
}

// Devolver el HTML actualizado de las tarjetas
echo $html;
?>
<?php
// Inicio de una nueva fila
         // echo '<div class="row my-3">';
        
        // Mostrar un elemento "card"

       // echo '<div id="tarjetas-container" class="col-4 mx-10" style="margin-bottom: 5px">';
        //echo '  <div class="card text-bg-light mb-3 text-center" style="max-width: 23rem;">';
        //echo '  <h4><div class="card-header ">' . $fila['comuna'] . '</div></h4>';
        //echo '    <div class="card-body">';
        //echo '      <h3 class="card-title">' . $fila['comuna'] . '</h3>';
        //echo '      <h6 class="card-subtitle mb-2 text-muted">' . $fila['nombre'] . '</h6>';
        //echo '      <h5 class="card-title">' . $fila['direccion'] . '</h5>';
        //echo '<hr>';
        //echo '      <p class="card-text">' . $fila['referencia'] . '</p>';
        //echo '<table class="mx-auto">';
        //echo '<tr>';
        //echo '<td><button class="btn btn-outline-primary">Ver Mapa</button></td>';
        //echo '<br>';
        //echo '<td style="margin-left: 10px"><a href="mostrar_horas.php?documento_seleccionado=' . $documento_seleccionado . '&nombre=' . $nombre . '&nombrenot=' . $fila['nombre'] . '&notaria_seleccionada=' . $fila['id'] . '&comuna=' . $fila['comuna'] . '&direccion=' . urlencode($fila['direccion']) . '" class="btn btn-outline-warning"><h6>Continuar</h6></a></td>';
        //echo '</tr>';
        //echo '</table>';
        //echo '</div>';
        //echo '</div>';
        //echo '</div>';
        //$contador++;
        //if ($contador % 3 == 0) {
          // Fin de la fila
          //echo '</div>';
        //}
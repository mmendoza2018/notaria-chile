<?php
function verificarPaso($pasoActual, $pasoAnterior) {
  session_start();

  echo $pasoActual;
  echo $pasoAnterior;

  // Si el paso anterior no se ha completado, redirige al usuario a la página anterior
  if (!isset($_SESSION['paso' . $pasoAnterior]) || !$_SESSION['paso' . $pasoAnterior]) {
    header("Location: pagina$pasoAnterior.php");
    exit();
  }

  // Marcar el paso actual como completado
  $_SESSION['paso' . $pasoActual] = true;
}

?>
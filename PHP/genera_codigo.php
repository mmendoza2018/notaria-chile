<?php 

function generarCadenaAleatoria($longitud) {
  $caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $cadenaAleatoria = '';
  
  for ($i = 0; $i < $longitud; $i++) {
      $indiceAleatorio = random_int(0, strlen($caracteres) - 1);
      $cadenaAleatoria .= $caracteres[$indiceAleatorio];
  }
  
  return $cadenaAleatoria;
}

?>
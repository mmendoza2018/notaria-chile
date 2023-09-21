<?php
// Conectar a la base de datos
$conexion = mysqli_connect('localhost', 'root', '12345678', 'notaria');

// Obtener día de la semana desde la URL
$dia = $_GET['dia'];

// Consultar horarios disponibles para el día seleccionado
$resultado = mysqli_query($conexion, "SELECT * FROM horarios WHERE dia = $dia AND disponible = true");

// Crear array de horarios
$horarios = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
  $horarios[] = $fila;
}

// Enviar horarios en formato JSON
header('Content-Type: application/json');
echo json_encode($horarios);
?>
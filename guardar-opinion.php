<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = trim($_POST["nombre"]);
  $localidad = trim($_POST["localidad"]);
  $mensaje = trim($_POST["mensaje"]);
  $fecha = date("d/m/Y H:i");

  // Validación básica
  if ($nombre !== "" && $localidad !== "" && $mensaje !== "") {
    // Sanitizar contenido
    $nombre = htmlspecialchars($nombre, ENT_QUOTES);
    $localidad = htmlspecialchars($localidad, ENT_QUOTES);
    $mensaje = htmlspecialchars($mensaje, ENT_QUOTES);

    // Formato de línea
    $linea = $fecha . "|" . $nombre . "|" . $localidad . "|" . $mensaje . PHP_EOL;

    // Guardar en archivo
    file_put_contents("opiniones.txt", $linea, FILE_APPEND | LOCK_EX);

    // Redirigir con éxito
    header("Location: opiniones.php?exito=1");
    exit;
  } else {
    // Redirigir con error
    header("Location: opiniones.php?error=1");
    exit;
  }
}
?>

<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = trim($_POST["nombre"] ?? "");
  $email = trim($_POST["email"] ?? "");
  $mensajeTexto = trim($_POST["mensaje"] ?? "");

  if ($nombre !== "" && $email !== "" && $mensajeTexto !== "") {
    $mensaje = "¡Gracias por tu mensaje, $nombre!";
  } else {
    $mensaje = "Mensaje inválido. Por favor, revisa los campos e inténtalo de nuevo.";
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Prueba de contacto</title>
</head>
<body>
  <form method="post" action="">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Correo" required>
    <textarea name="mensaje" placeholder="Mensaje" required></textarea>
    <button type="submit">Enviar</button>
  </form>

  <?php if ($mensaje): ?>
    <p><?= htmlspecialchars($mensaje) ?></p>
  <?php endif; ?>
</body>
</html>

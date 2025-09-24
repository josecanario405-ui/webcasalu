<?php
$nombre = trim($_POST["nombre"] ?? "");
$email = trim($_POST["email"] ?? "");
$mensajeTexto = trim($_POST["mensaje"] ?? "");

if (!empty($nombre) && !empty($email) && !empty($mensajeTexto)) {
  $destinatario = "isabelmasaje72@gmail.com";
  $asunto = "Nuevo mensaje desde Casa Luna";
  $contenido = "Nombre: $nombre\nCorreo: $email\nMensaje:\n$mensajeTexto";
  $cabeceras = "From: $email";

  mail($destinatario, $asunto, $contenido, $cabeceras);

  // Redirección con JavaScript
  echo '<!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Redirigiendo…</title>
    <script>
      window.location.href = "gracias.php";
    </script>
  </head>
  <body>
    <p>Redirigiendo…</p>
  </body>
  </html>';
  exit;
} else {
  echo '<!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Error en el formulario</title>
    <script>
      window.location.href = "contacto.php?error=1";
    </script>
  </head>
  <body>
    <p>Redirigiendo al formulario…</p>
  </body>
  </html>';
  exit;
}

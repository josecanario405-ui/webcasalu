<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// 🔒 Validación antispam
if (strlen($mensaje) < 10 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  die("<p style='color:red; font-weight:bold; text-align:center; margin-top:40px;'>Mensaje inválido. Por favor, revisa los campos e inténtalo de nuevo.</p>");
}

$fecha = date("Y-m-d H:i:s");

// 📁 Guardar en archivo
$linea = "$fecha|$nombre|$email|$mensaje\n";
file_put_contents("mensajes-contacto.txt", $linea, FILE_APPEND);

// 📬 Enviar correo al administrador
$para = "info@casaluna.com"; // Actualiza con tu correo real
$asunto = "Nuevo mensaje de contacto – Casa Luna";
$cuerpo = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";
$headers = "From: $email";

mail($para, $asunto, $cuerpo, $headers);

// 💌 Respuesta automática al visitante
$asuntoCliente = "Gracias por contactar con Casa Luna";
$cuerpoCliente = "Hola $nombre,\n\nGracias por tu mensaje. Lo hemos recibido correctamente y te responderemos pronto.\n\nUn saludo,\nCasa Luna";
$headersCliente = "From: info@casaluna.com";

mail($email, $asuntoCliente, $cuerpoCliente, $headersCliente);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mensaje enviado – Casa Luna</title>
  <style>
    body {
      font-family: system-ui, sans-serif;
      background-color: #f1f8e9;
      margin: 0;
      padding: 0;
    }
    .confirmacion {
      max-width: 600px;
      margin: 60px auto;
      padding: 30px;
      background: #e8f5e9;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .confirmacion h2 {
      color: #2e7d32;
      margin-bottom: 15px;
    }
    .confirmacion p {
      font-size: 1.1rem;
      margin-bottom: 20px;
    }
    .confirmacion a {
      display: inline-block;
      margin: 10px;
      padding: 12px 24px;
      background: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
      transition: background 0.3s ease;
    }
    .confirmacion a:hover {
      background: #388e3c;
    }
  </style>
</head>
<body>

  <div class="confirmacion">
    <h2>¡Gracias por contactar con Casa Luna!</h2>
    <p>Hemos recibido tu mensaje y te responderemos lo antes posible.</p>
    <p>Si tu consulta es urgente, puedes llamarnos directamente al <strong>+34 626 624 771</strong>.</p>
    <a href="index.html">Volver al inicio</a>
    <a href="reservas.html">Ir a reservas</a>
  </div>

</body>
</html>

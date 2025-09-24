<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto – Casa Luna</title>
  <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>

<?php include("includes/header.php"); ?>

<main>
  <h1>Contacto</h1>
  <p>¿Quieres reservar o preguntar algo? Escríbenos directamente.</p>

  <form action="https://formspree.io/f/xqadrdab" method="POST">
  <label for="nombre">Tu nombre:</label>
  <input type="text" name="nombre" id="nombre" required>

  <label for="email">Tu correo electrónico:</label>
  <input type="email" name="email" id="email" required>

  <label for="mensaje">Tu mensaje:</label>
  <textarea name="message" id="mensaje" rows="5" required></textarea>

  <input type="hidden" name="_redirect" value="http://localhost:8888/webcasaluna/gracias.php">

  <button type="submit">Solicitar información</button>
</form>




  <div class="info-contacto">
    <p><strong>Teléfono:</strong> <a href="tel:+34987654321">+34 987 654 321</a></p>
    <p><strong>Correo:</strong> <a href="mailto:isabelmasaje72@gmail.com">isabelmasaje72@gmail.com</a></p>
    <p><strong>Horario:</strong> Lunes a viernes, 9:00–18:00</p>
  </div>

  <a href="https://wa.me/34987654321" target="_blank">
    <button>Contactar por WhatsApp</button>
  </a>
</main>

<?php include("includes/footer.php"); ?>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tarifas - La Viliella</title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
      font-family: sans-serif;
      background-color: #fdfdfd;
    }

    main {
      flex: 1;
      padding: 40px 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .tarifas-grid,
    .opiniones-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: center;
      margin-bottom: 50px;
    }

    .tarjeta-tarifa {
      background-color: #f8f8f8;
      border-radius: 8px;
      padding: 20px;
      max-width: 300px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      flex: 1 1 280px;
    }

    .tarjeta-tarifa h2 {
      font-size: 1.4rem;
      margin-bottom: 10px;
      color: #333;
    }

    .tarjeta-tarifa p {
      font-size: 1rem;
      margin-bottom: 15px;
      color: #555;
    }

    .tarjeta-tarifa ul {
      list-style: none;
      padding-left: 0;
      font-size: 0.95rem;
      color: #444;
    }

    .tarjeta-tarifa li {
      margin-bottom: 6px;
    }

    .btn-reserva {
      display: inline-block;
      margin-top: 15px;
      padding: 10px 16px;
      background-color: #4a7c59;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .btn-reserva:hover {
      background-color: #3b6648;
    }

    .tabla-tarifas {
      text-align: center;
      margin-bottom: 40px;
    }

    .tabla-tarifas table {
      width: 100%;
      max-width: 800px;
      margin: 0 auto;
      border-collapse: collapse;
    }

    .tabla-tarifas th,
    .tabla-tarifas td {
      border: 1px solid #ccc;
      padding: 12px;
      font-size: 1rem;
    }

    .tabla-tarifas th {
      background-color: #f0f0f0;
    }

    .leyenda-temporadas {
      text-align: center;
      font-size: 0.95rem;
      color: #555;
      margin-bottom: 40px;
    }

    .opiniones {
      max-width: 600px;
      margin: 60px auto;
      padding: 0 20px;
    }

    .opiniones h2 {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 30px;
    }

    .form-opinion {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .form-opinion label {
      font-weight: bold;
      color: #333;
    }

    .form-opinion input,
    .form-opinion textarea {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1rem;
      width: 100%;
    }

    .form-opinion button {
      background-color: #4a7c59;
      color: #fff;
      border: none;
      padding: 12px;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .form-opinion button:hover {
      background-color: #3b6648;
    }

    .opiniones-publicas {
      max-width: 1000px;
      margin: 60px auto;
      padding: 0 20px;
      text-align: center;
    }

    .opiniones-publicas h2 {
      font-size: 2rem;
      margin-bottom: 30px;
    }

    .opinion {
      background-color: #f8f8f8;
      border-radius: 8px;
      padding: 20px;
      max-width: 600px;
      margin: 20px auto;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      font-style: italic;
    }

    .opinion span {
      display: block;
      margin-top: 10px;
      font-weight: bold;
      color: #4a7c59;
    }

    .footer {
      width: 100%;
      background-color: #4a7c59;
      color: #fff;
      padding: 20px 0;
      text-align: center;
      font-size: 0.9rem;
      margin-top: auto;
    }

    .footer-contenido {
      max-width: 1000px;
      margin: 0 auto;
    }

    .footer a {
      color: #fff;
      text-decoration: underline;
      margin: 0 8px;
    }

    .footer a:hover {
      text-decoration: none;
    }
  </style>
</head>
<body>

  <main>

    <!-- Tarjetas -->
    <section class="tarifas-grid">
      <!-- Aquí van tus tarjetas de Luna Llena, Menguante y Creciente -->
    </section>

    <!-- Tabla comparativa -->
    <section class="tabla-tarifas">
      <!-- Aquí va tu tabla de precios -->
    </section>

    <!-- Leyenda -->
    <p class="leyenda-temporadas">
      <strong>Temporada alta:</strong> julio, agosto, Semana Santa, Navidad<br>
      <strong>Temporada media:</strong> mayo, junio, septiembre<br>
      <strong>Temporada baja:</strong> resto del año
    </p>

    <!-- Formulario -->
    <section class="opiniones">
      <h2>Deja tu opinión</h2>
      <form class="form-opinion" action="guardar-opinion.php" method="POST">
        <label for="nombre">Tu nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="localidad">Localidad:</label>
        <input type="text" id="localidad" name="localidad">

        <label for="mensaje">Tu opinión:</label>
        <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

        <button type="submit">Enviar opinión</button>
      </form>
    </section>

    <!-- Opiniones públicas -->
    <section class="opiniones-publicas">
      <h2>Opiniones de nuestros huéspedes</h2>
      <?php
        if (file_exists("opiniones.txt")) {
          $opiniones = file("opiniones.txt");
          foreach ($opiniones as $opinion) {
            list($nombre, $localidad, $mensaje) = explode("|", $opinion);
            echo "<div class='opinion'>";
            echo "<p>“" . nl2br(trim($mensaje)) . "”</p>";
            echo "<span>— " . htmlspecialchars($nombre) . ", " . htmlspecialchars($localidad) . "</span>";
            echo "</div>";
          }
        }
      ?>
    </section>

  </main>

  <footer class="footer">
    <div class="footer-contenido">
      <p>&copy; 2025 La Viliella – Cangas del Narcea, Asturias</p>
      <p><a href="aviso-legal.html">Aviso legal</a> · <a href="contacto.html">Contacto</a></p>
    </div>
  </footer>

</body>
</html>

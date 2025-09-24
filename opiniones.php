<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Opiniones</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css">
  <title>Casa Luna - Inicio</title>
  <style>
    * { box-sizing: border-box; }
    body { margin: 0; font-family: system-ui, sans-serif; color: #222; }
    img { max-width: 100%; display: block; }

    header {
      position: relative;
      min-height: 60vh;
      background: url('img/portada.jpg') center center/cover no-repeat;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: #fff;
      text-align: center;
    }
	  	  header {
  height: 40vh;
  min-height: 250px;
}
    header::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.7));
      z-index: 1;
    }

    nav {
      position: absolute;
      top: 70px;
      left: 0;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 15px 20px;
      z-index: 3;
    }
    .logo-link {
      position: absolute;
      left: 20px;
      background: rgba(255,255,255,0.7);
      padding: 8px 12px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.25);
    }
    .logo-img { height: 150px; }
    .nav-links {
      list-style: none;
      display: flex;
      gap: 15px;
      margin: 0;
      padding: 0;
    }
    .nav-links li a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      position: relative;
      transition: color 0.3s ease;
    }
    .nav-links li a::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -3px;
      width: 0%;
      height: 2px;
      background: #4CAF50;
      transition: width 0.3s ease;
    }
    .nav-links li a:hover { color: #4CAF50; }
    .nav-links li a:hover::after { width: 100%; }

    .hero-contenido {
      position: relative;
      z-index: 2;
      max-width: 600px;
      padding: 20px 30px;
      background: rgba(0,0,0,0.45);
      border-radius: 10px;
      animation: fadeInUp 1.2s ease forwards;
      opacity: 0;
    }
    .hero-contenido h1 { font-size: 2.4rem; margin-bottom: 8px; }
    .hero-contenido p { font-size: 1.1rem; margin-bottom: 16px; }
    .btn {
      background: linear-gradient(135deg, #4CAF50, #45a049);
      color: #fff;
      padding: 12px 24px;
      font-weight: 700;
      text-decoration: none;
      border-radius: 6px;
      display: inline-block;
      transition: background 0.25s ease, transform 0.15s ease, box-shadow 0.25s ease;
      box-shadow: 0 4px 8px rgba(0,0,0,0.25);
    }
    .btn:hover {
      background: linear-gradient(135deg, #45a049, #3e8e41);
      box-shadow: 0 6px 12px rgba(0,0,0,0.3);
    }
    .btn:active { transform: translateY(1px); }

    @keyframes fadeInUp {
      from { transform: translateY(30px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    .info-grid {
      max-width: 1200px;
      margin: 80px auto;
      padding: 0 20px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }
    .info-bloque {
      background: #f9f9f9;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 0.8s ease forwards;
    }
    .info-bloque:nth-child(1) { animation-delay: 0.2s; }
    .info-bloque:nth-child(2) { animation-delay: 0.4s; }
    .info-bloque:nth-child(3) { animation-delay: 0.6s; }
    .info-bloque:nth-child(4) { animation-delay: 0.8s; }
    .info-bloque h2 { font-size: 1.5rem; margin-bottom: 15px; color: #4CAF50; }
    .info-bloque p, .info-bloque ul { line-height: 1.6; margin: 0; }
    .info-bloque ul { padding-left: 20px; }
	  }

    .carrusel {
      position: relative;
      max-width: 700px;
      margin: 30px auto;
      overflow: hidden;
    }

    .carrusel-imagenes {
      display: flex;
      transition: transform 0.5s ease;
      scroll-behavior: smooth;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
    }

    .carrusel-imagenes img {
      min-width: 100%;
      scroll-snap-align: center;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      object-fit: cover;
    }

    .carrusel-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(76, 175, 80, 0.8);
      color: white;
      border: none;
      font-size: 2rem;
      padding: 10px;
      cursor: pointer;
      z-index: 2;
      border-radius: 50%;
    }

    .carrusel-btn.prev { left: 10px; }
    .carrusel-btn.next { right: 10px; }

    @media (max-width: 768px) {
      .info-grid {
        display: block;
        padding: 20px;
      }

      .carrusel-btn {
        font-size: 1.5rem;
        padding: 8px;
      }

      .carrusel-imagenes img {
        width: 100%;
      }
    }
	   main {
      flex: 1;
      padding: 40px 20px;
      max-width: 1000px;
      margin: 0 auto;
    }

    h1 {
      text-align: center;
      font-size: 2.2rem;
      margin-bottom: 40px;
      color: #4a7c59;
    }

    .form-opinion {
      display: flex;
      flex-direction: column;
      gap: 15px;
      margin-bottom: 60px;
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

    .form-opinion textarea {
      resize: vertical;
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
      align-self: flex-start;
    }

    .form-opinion button:hover {
      background-color: #3b6648;
    }

    .opiniones-publicas {
      text-align: center;
    }

    .opiniones-publicas h2 {
      font-size: 1.8rem;
      margin-bottom: 30px;
      color: #4a7c59;
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

 footer {
  background-color: #4CAF50;
  color: white;
  text-align: center;
  padding: 30px 20px;
  font-size: 0.95rem;
  min-height: 100px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.footer-contenido {
  max-width: 900px;
  margin: 0 auto;
}

.footer-contenido a {
  color: white;
  text-decoration: underline;
  margin: 0 5px;
  font-weight: 500;
}

.footer-contenido a:hover {
  text-decoration: none;
  color: #e0ffe0;
}

	.titulo-tarifa {
  color: #fff;
}
	  .form-opinion {
  background: #e3f2e1;
  border-left: 6px solid #4CAF50;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  padding: 30px;
  max-width: 700px;
  margin: 40px auto;
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.form-opinion label {
  font-weight: 600;
  color: #333;
}

.form-opinion input,
.form-opinion textarea {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 1rem;
  font-family: inherit;
}

.form-opinion button {
  background: linear-gradient(135deg, #4CAF50, #45a049);
  color: #fff;
  padding: 12px 20px;
  font-weight: 600;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: background 0.25s ease, transform 0.15s ease, box-shadow 0.25s ease;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.form-opinion button:hover {
  background: linear-gradient(135deg, #45a049, #3e8e41);
  box-shadow: 0 6px 12px rgba(0,0,0,0.3);
}

.form-opinion button:active {
  transform: translateY(1px);
}

.contenedor-opiniones {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
  max-width: 1200px;
  margin: 40px auto;
  padding: 0 20px;
}
.opinion {
  background: #f1f8e9;
  border-left: 4px solid #4CAF50;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  font-style: italic;
}
.opinion:hover {
  transform: translateY(-4px);
  box-shadow: 0 6px 12px rgba(0,0,0,0.1);
}

.opinion .autor {
  font-weight: 600;
  color: #333;
  margin-bottom: 5px;
}

.opinion .localidad {
  font-style: italic;
  color: #666;
}

.opinion .fecha {
  font-size: 0.9rem;
  color: #888;
  margin-bottom: 10px;
}

.opinion .mensaje {
  font-size: 1rem;
  color: #444;
  line-height: 1.6;
}


.paginacion {
  text-align: center;
  margin: 30px auto;
}

.paginacion a {
  display: inline-block;
  margin: 0 5px;
  padding: 8px 12px;
  background: #e3f2e1;
  color: #333;
  border-radius: 6px;
  text-decoration: none;
  font-weight: 600;
  transition: background 0.2s ease;
}

.paginacion a:hover {
  background: #cde8d2;
}
.titulo-tarifa,
.comparativa {
  font-size: 2rem;
  text-align: center;
  margin-bottom: 20px;
}
	.titulo-opiniones {
  color: #fff;
}


	  
  </style>
</head>
<body>
	
  </style>
</head>
<body>

<header>
  <nav>
    <a href="index.html" class="logo-link">
      <img src="img/Logo1.png" alt="Casa Luna" class="logo-img">
    </a>
    <ul class="nav-links">
      <li><a href="index.html">Inicio</a></li>
      <li><a href="sobre nosotros.html">Sobre Nosotros</a></li>
      <li><a href="entorno.html">Entorno</a></li>
      <li><a href="alojamiento.html">Alojamiento</a></li>
      <li><a href="experiencias.html">Experiencias</a></li>
	  <li><a href="cursos.html">Cursos</a></li>
      <li><a href="galeria.html">Galería</a></li>
      <li><a href="reservas.html">Reservas</a></li>
	  <li><a href="contacto.html">Contacto</a></li>
      <li><a href="ubicacion.html">Ubicación</a></li>
    </ul>
  </nav>

  <div class="hero-contenido">
  <h1 class="titulo-opiniones">Opiniones</h1>
  <p>Elige tu experiencia, nosotros la hacemos posible</p>
</div>

    
</header>

  <meta charset="UTF-8">
  <title>Opiniones</title>
  
</head>
<body>

 <main>
  <h2 class="titulo-tarifa">Comparte tu experiencia en La Casa Luna</h2>

	 
  <?php
  if (isset($_GET['exito'])) {
    echo '<p style="color:green; text-align:center;">Gracias por tu opinión. Se ha guardado correctamente.</p>';
  }
  if (isset($_GET['error'])) {
    echo '<p style="color:red; text-align:center;">Por favor, completa todos los campos obligatorios.</p>';
  }
  ?>

  <!-- Formulario -->
  <form class="form-opinion" action="guardar-opinion.php" method="POST">
    <label for="nombre">Tu nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="localidad">Localidad:</label>
    <input type="text" id="localidad" name="localidad">

    <label for="mensaje">Tu opinión:</label>
    <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

    <button type="submit">Enviar opinión</button>
  </form>

  <!-- Opiniones públicas -->
  <?php
  $opiniones = file("opiniones.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  $totalOpiniones = count($opiniones);
  $porPagina = 5;

  $paginaActual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
  $inicio = ($paginaActual - 1) * $porPagina;
  $opinionesPagina = array_slice($opiniones, $inicio, $porPagina);
  ?>

  <h2 class="titulo-tarifa">Opiniones de nuestros visitantes</h2>


  <?php
  if (count($opinionesPagina) > 0) {
    echo '<div class="contenedor-opiniones">';
    foreach ($opinionesPagina as $linea) {
      $partes = explode("|", $linea);
      if (count($partes) === 4) {
        $fecha = htmlspecialchars($partes[0]);
        $nombre = htmlspecialchars($partes[1]);
        $localidad = htmlspecialchars($partes[2]);
        $mensaje = nl2br(htmlspecialchars($partes[3]));

        echo '<div class="opinion">';
        echo '<p class="autor">' . $nombre . ' <span class="localidad">desde ' . $localidad . '</span></p>';
        echo '<p class="fecha">' . $fecha . '</p>';
        echo '<p class="mensaje">' . $mensaje . '</p>';
        echo '</div>';
      }
    }
    echo '</div>';
  } else {
    echo '<p style="text-align:center;">No hay opiniones en esta página.</p>';
  }

  $totalPaginas = ceil($totalOpiniones / $porPagina);
  if ($totalPaginas > 1) {
    echo '<div class="paginacion">';
    for ($i = 1; $i <= $totalPaginas; $i++) {
      echo '<a href="?pagina=' . $i . '">' . $i . '</a> ';
    }
    echo '</div>';
  }
  ?>
</main>

    <!-- contenido principal aquí -->
  </main>

 <footer>
  <div class="footer-contenido">
    <p>&copy; 2025 Casa Luna – La Viliella. (Cangas de Narcea – Asturias)</p>
    <p>
      <a href="/webcasaluna/aviso-legal.html">Aviso legal</a> · 
      <a href="/webcasaluna/privacidad.html">Privacidad</a>
    </p>
  </div>
</footer>


</body>	
</html>




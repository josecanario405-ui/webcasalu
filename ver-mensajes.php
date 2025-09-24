<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: login.php");
  exit;
}

$archivo = "mensajes-contacto.txt";
$lineas = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$lineas = array_reverse($lineas);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bandeja de entrada – Casa Luna</title>
  <style>
    body {
      font-family: system-ui, sans-serif;
      background-color: #f1f8e9;
      margin: 0;
      padding: 0;
    }
    header {
      background: url('img/portada.jpg') center center/cover no-repeat;
      color: white;
      padding: 60px 20px;
      text-align: center;
      position: relative;
    }
    header::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.7));
      z-index: 1;
    }
    header h1 {
      position: relative;
      z-index: 2;
      font-size: 2.5rem;
      margin: 0;
    }
    main {
      max-width: 1000px;
      margin: 40px auto;
      padding: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }
    th {
      background-color: #4CAF50;
      color: white;
    }
    tr:hover {
      background-color: #f1f1f1;
    }
    .volver {
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
    .volver:hover {
      background: #388e3c;
    }
    .botones {
      text-align: center;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <header>
    <h1>Bandeja de entrada – Casa Luna</h1>
  </header>

  <main>
    <table>
      <tr>
        <th>Fecha</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Mensaje</th>
      </tr>
      <?php foreach ($lineas as $linea): 
        list($fecha, $nombre, $email, $mensaje) = explode("|", $linea);
      ?>
      <tr>
        <td><?php echo htmlspecialchars($fecha); ?></td>
        <td><?php echo htmlspecialchars($nombre); ?></td>
        <td><?php echo htmlspecialchars($email); ?></td>
        <td><?php echo nl2br(htmlspecialchars($mensaje)); ?></td>
      </tr>
      <?php endforeach; ?>
    </table>

    <div class="botones">
      <a href="index.html" class="volver">Volver al inicio</a>
      <a href="logout.php" class="volver">Cerrar sesión</a>
    </div>
  </main>

</body>
</html>

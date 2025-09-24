<?php
session_start();
if (isset($_SESSION['usuario'])) {
  header("Location: ver-mensajes.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Acceso privado – Casa Luna</title>
  <style>
    body {
      font-family: system-ui, sans-serif;
      background: url('img/portada.jpg') center center/cover no-repeat;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      position: relative;
    }
    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.5);
      z-index: 0;
    }
    .login-box {
      position: relative;
      z-index: 1;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      max-width: 400px;
      width: 100%;
    }
    .logo {
      text-align: center;
      margin-bottom: 20px;
    }
    .logo img {
      height: 120px;
    }
    h2 {
      text-align: center;
      color: #2e7d32;
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    button {
      width: 100%;
      padding: 12px;
      background: #4CAF50;
      color: white;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
    }
    button:hover {
      background: #388e3c;
    }
    .error {
      color: red;
      text-align: center;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

  <div class="login-box">
    <div class="logo">
      <img src="img/Logo1.png" alt="Casa Luna">
    </div>
    <h2>Acceso privado</h2>
    <?php if (isset($_GET['error'])): ?>
      <p class="error">Usuario o contraseña incorrectos</p>
    <?php endif; ?>
    <form action="validar.php" method="post">
      <label for="usuario">Usuario:</label>
      <input type="text" name="usuario" id="usuario" required>

      <label for="clave">Contraseña:</label>
      <input type="password" name="clave" id="clave" required>

      <button type="submit">Entrar</button>
    </form>
  </div>

</body>
</html>

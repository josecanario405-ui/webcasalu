<?php
session_start();

// Usuario y contraseña definidos
$usuario_valido = "jose";
$clave_valida = "casaluna2025";

if ($_POST['usuario'] === $usuario_valido && $_POST['clave'] === $clave_valida) {
  $_SESSION['usuario'] = $_POST['usuario'];
  header("Location: ver-mensajes.php");
} else {
  header("Location: login.php?error=1");
}

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Estadisticas</title>
	$semanas = [];
foreach ($lineas as $linea) {
  list($fecha, $nombre, $email, $mensaje) = explode("|", $linea);
  $semana = date("Y-W", strtotime($fecha)); // Año-Semana
  $semanas[$semana] = ($semanas[$semana] ?? 0) + 1;
}

</head>

<body>
</body>
</html>
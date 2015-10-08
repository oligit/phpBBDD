
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		include 'Sesion.php';
		$sesion = new Sesion();
		echo $sesion->informar();
	?>
	<p><a href="ejercicio1.php">Actualizar</a></p>
	<p><a href="cerrarSesion.php">Eliminar</a></p>
</body>
</html>
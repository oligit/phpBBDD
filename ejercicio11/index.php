<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio 11</title>
	<link rel="stylesheet" href="">
	<script src="js/main.js"></script>
	<?php 
		include '../config.php';
		$dbData = array(SERVER, USER, PASS, 'cuentas');
		include 'Cuenta.php';
	 ?>
</head>
<body>
	<header>
		<h1>Willy Bank</h1>
		<h2>transferencias propias</h2>
	</header>
	<article>
		<section>
			<?php include 'formularios/tablaCuentas.php' ?>
		</section>
		<section>
			<?php include 'formularios/seleccion.php' ?>
		</section>
		<section>
			<?php include 'formularios/traspaso.php' ?>
		</section>
		<section>
			<?php include 'formularios/confirmacion.php' ?>
		</section>
	</article>
	
</body>
</html>
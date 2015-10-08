 <?php 
 	require_once 'Carpeta.php';
 	require_once 'File.php';
 	const FOLDER = '.';
 	$oFolder = new Carpeta(FOLDER, $_GET);
 	
  ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Ejercicio 6b</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<form action="index.php" method="GET">
	 	<label for="nombre">Nombre</label>
	 	<input type="text" name="nombre">
	 	<label for="apellidos">Apellidos</label>
	 	<input type="text" name="apellidos">
	 	<label for="dni"></label>
	 	<input type="text" name="dni">
	 	<label for="datalist"></label>
	 	<datalist id="ficheros" name="ficheros">
	 		<?php $oFolder->crearListOption(); ?>
	 	</datalist>
	 	<input type="submit" name="boton" value="Grabar">
	 	<input type="submit" name="boton" value="Leer">
 	</form>
 	<?php 	
	 			if (isset($_POST['nombre'])) {
 					print_r($_POST);
 				} 
	 		?>
	 	<article>
	 		<?php $oFolder->selectOperation(); ?>
	 	</article>
 </body>
 </html>
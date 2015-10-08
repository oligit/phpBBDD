 	<?php 
 		include 'Sesion.php';
 		$sesion = new Sesion();
 		$sesion->borrarSesion();
 	 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<header><h1>Sesiones</h1></header>
 	<article><p>Reiniciado el contador de sesiones</p>

 	<p><a href="ejercicio1.php">Volver a index</a></p>
 	</article>
 </body>
 </html>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title><?= "Ejercicio cookie" ?></title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<header>
 		<h1><?= "Ejercicio cookie" ?></h1>
 	</header>
 	<article>
 		<p>
 			<?php
				include 'Cookie.php';
				const EJERCICIO = 'Ejercicio 2';
				$cookie = new Cookie();
 				echo $cookie->informar(); 
 			?>
 		</p>
 		<p><a href="index.php">Actualizar cookie</a></p>
 		<p><a href="borrarCookie.php">Borrar cookie</a></p>
 	</article>
 </body>
 </html>
<?php 
	include 'Writer.php';
	$nombre = $_POST['nombre'];
	$texto = $_POST['texto'];


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Ejercicio 5c</title>
 	<link rel="stylesheet" href="">
 	<style>
	 	body{
	 		background-color: #BD6666;	
	 	}
	 	header{
	 		background-color: #840101;
	 		text-align: center;
	 		border-radius: 15px;
	 	}
 		article{
 			width: 100%;
 		}
		.main{
			width: 80%;
			margin: 0 auto;
		}
		.izquierda{
			float: left;
			width: 40%;
			margin-left: 5%;
		}
		.derecha{
			width: 40%;
			float: left;
		}
 	</style>
 </head>
 <body>
 	<header>
 		<h1>Ejercicio 5c</h1>
 	</header>
 	<article>
 		<div class="main">
 			<div class="izquierda">
 				<?php  
 					if (isset($_POST['nombre']) && $_POST['texto']) {
 					echo "skjdbfhjdsbhfjbdsf";
						$writer = new Writer($nombre, $texto);
						$writer->escribir('a+');
						$resultados = $writer->leer('r');
						echo $resultados;
					}
 				?>
 			</div>
 			<div class="derecha">
 				<?php include "form.php"; ?>
 			</div>
 		</div>
 	</article>
 </body>
 </html>
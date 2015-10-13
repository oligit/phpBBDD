<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio 9 a</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="main">
		<?php include "static/_form.php" ?>
	</div>
	<article>
		<?php 
			/**
			* 
			*/
			class Index
			{
				
				static public function main()
				{
					if (isset($_POST['continente'])) {
						require 'Continente.php';
						$conti = new Continente($_POST['continente']);
						$conti->abrirDB();
						echo $conti->hacerConsulta();
						$conti->cerrarDB();
					}
				}
			}
			Index::main();
		?>
	</article>
	
	

</body>
</html>
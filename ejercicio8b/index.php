<?php  
	require_once "../config.php";
	include 'Database.php';
	include 'Estudiantes.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio 8a</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<header>
		<h1>Ejercicio 8</h1>
	</header>
	<article>
		<?php 
			/**
			* 
			*/
			class Index 
			{
				static public function main (){
					if (isset($_POST)) {
						$dataForDb = array(SERVER, USER, PASS, 'estudiantes');
						$estudiante = new Estudiante($dataForDb, $_POST);
						$estudiante->insertar();
					}
				}
			}
		 ?>
		 <?php  Index::main();?>
		 <form action="index.php" method="POST">
		 	<input type="text" placeholder="nombre" name="nombre">
		 	<input type="text" placeholder="apellidos" name="apellidos">
		 	<input type="text" placeholder="ciudad" name="ciudad">
		 	<input type="text" placeholder="pais" name="pais">
		 	<input type="submit" value="Enviar">
		 </form>
	</article>
	<footer>
		
	</footer>
</body>
</html>
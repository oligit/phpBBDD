<?php  
	require_once "../config.php";
	
	include 'Estudiantes.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio 10</title>
	<link rel="stylesheet" href="">
	<script type="text/javascript" src="js/js.js"></script>
	<style>
		body{
			background: url('wall.jpg') no-repeat fixed;
		}
	</style>
</head>
<body>
	<header>
		<h1>Ejercicio 8</h1>
	</header>
	<article>
		<?php 
		$dataForDb = array(SERVER, USER, PASS, 'estudiantes');
			class Index 
			{
				static public function main (){
					if (isset($_GET['apellidos'])) {
						//$estudiante = new Estudiante($dataForDb, $_GET);
					}
				}
			}
		 ?>
		 <?php  Index::main();?>
		 <form action="index.php" method="POST">
		 	<!-- <input type="text" placeholder="nombre" name="nombre" id="nombre">
		 	<input type="text" placeholder="apellidos" name="apellidos" id="apellidos">
		 	<input type="text" placeholder="ciudad" name="ciudad" id="ciudad">
		 	<input type="text" placeholder="pais" name="pais" id="pais"> -->
		 	<select name="estudiante" id="estudiante">
				<option value="default">Selecciona un alumno</option>
				<?php 
					include '_option.php'; 
					if (isset($_GET['apellidos'])){
						$option = new Option($dataForDb);
						echo $option->pintarOpcion($_GET);
					} else {
						$option = new Option($dataForDb);
						echo $option->pintarOpcion();
					}
					
				?>
			</select>
		 	<?php 
		 		include 'Input.php';
		 		
		 		if (isset($_GET['apellidos'])) {
		 			$input = new Input($dataForDb);
		 			echo $input->pintarInput($_GET);
		 		} else{
		 			$input = new Input($dataForDb);
		 			echo $input->pintarInput();
		 		}
		 	 ?>
		 	<input type="submit" value="Actualizar" id="btn">
		 
		
		</form>
	</article>
	<footer>
		
	</footer>
</body>
</html>
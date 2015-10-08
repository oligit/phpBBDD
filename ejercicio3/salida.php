<?php 
	include "templates/_cabecera.php"; 
	include "Lector.php";	
?>
	<?php 
		/*
		* main PHP 
		*/
		// $descriptor = fopen("nombres.txt", "r");
		// $variable = fread($descriptor, filesize("nombres.txt"));
		// $nombre = $_POST['nombre']." ".$_POST["apellido"];
		// $coincidencia = strstr($variable, $nombre);
		// if ($coincidencia) {
		// 	echo "Bienvenido".$nombre;
		// } else {
		// 	echo "Fuera de aquí intruso de mierda!!!!";
		// }
		$nombre = $_POST['nombre']." ".$_POST["apellido"];
		$lector = new Lector('nombres.txt', 'r', $nombre);

		//$lector->leer();
		echo $lector->buscar();
	 ?>
<?php include "templates/_pie.php" ?>
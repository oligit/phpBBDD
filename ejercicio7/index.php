<?php 
	$s = $_POST['servidor'];
	$u = $_POST['usuario'];
	$c = $_POST['password'];
	$db = $_POST['db'];

	if (isset($s) && isset($u) && isset($db)) {
		$mysqli = new mysqli($s, $u, $c, $db);
		//$mysqli->connect($s, $u, $c, $db); //no hace falta si en la instanciación del objeto metemos todos los parámetros
		//$mysqli->select_db($db); //tampoco hace falta si en la instanciación del objeto metemos todos los parámetros
		if ($mysqli->connect_error) {
			echo "Error ".$mysqli->connect_errno." :".$mysqli->connect_error;
			exit();
		} else {
			echo "Client info: ".$mysqli->client_info."<br> client version: ".$mysqli->client_version.
			"<br>server info: ".$mysqli->server_info."<br>";
			echo "server version ".$mysqli->server_version."<br>";
			echo "sql state: ".$mysqli->sqlstate;
		}
		$mysqli->close();
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Ejercicio 7</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<header>
 		<h1>Ejercicio 7</h1>
 	</header>
 	<article>
 		<section>
 			<form action="index.php" method="POST">
 				<label for="">Servidor</label>
 				<input type="text" name="servidor">
 				<label for="">usuario</label>
 				<input type="text" name="usuario">
 				<label for="">password</label>
 				<input type="password" name="password">
 				<label for="">db</label>
 				<input type="text" name="db">
 				<input type="submit" value="Enviar">
 			</form>
 		</section>
 	</article>
 </body>
 </html>
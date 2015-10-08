<?php include "templates/_cabecera.php"; ?>

 	<form action="salida.php" method="POST">
 		<label for="nombre">Nombre: </label>
 		<input type="text" name="nombre">
 		<label for="apellido">Apellido:	</label>
 		<input type="text" name="apellido">
 		<input type="submit" value="enviar">
 	</form>

 <?php include "templates/_pie.php"?>
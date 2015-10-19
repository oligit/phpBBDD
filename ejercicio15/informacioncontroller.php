<?php 

	include 'Informacion.php';
	if(isset($_POST['key'])){
		require_once('../config.php');
		$dbData = array(SERVER, USER, PASS, 'world');
		$in = new Informacion($_POST['key'], $dbData);
		echo $in->consultar();
	}
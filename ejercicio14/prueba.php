<?php 
	include 'Paises.php';
	if (isset($_GET['pais'])){
		include '../config.php';
		$dbData = array(SERVER, USER, PASS, 'world');
		$pais = new Paises($_GET['pais'], $dbData);
		echo $pais->imprimeCapital();
	}
<?php 
	include 'Paises.php';
	if (isset($_POST['pais'])){
		require_once('../config.php');
		$dbData = array(SERVER, USER, PASS, 'world');
		$pais = new Paises($_POST['pais'], $dbData);
		echo $pais->imprimeCapital();
	}
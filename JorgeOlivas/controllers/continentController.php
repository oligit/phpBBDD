<?php 
	require_once('../model/Continent.php');
	require_once('../../config.php');
	$dbData = array(SERVER, USER, PASS, 'world');
	if (isset($_POST['continente']) && isset($_POST['orden']) && isset($_POST['direccion'])) {
		$contiParams = array('continente'=>$_POST['continente'], 'orden'=>$_POST['orden'], 'direccion'=>$_POST['direccion']);
		$conti  = new Continent($dbData, $contiParams);
		echo $conti->imprimeContinente();
	}
 ?>
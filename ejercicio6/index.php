<?php 
	$dirRef = opendir('..');
	
	$i=0;
	while ($array = readdir($dirRef) != false) {
		echo $array[$i];
		$i++;
	}
 ?>
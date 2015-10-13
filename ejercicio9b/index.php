<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio 9 a</title>
	<link rel="stylesheet" href="main.css">
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script>
		jQuery(document).ready(function($) {
			console.log('entra en main');
			$('span#boton-top').click(function(){
				console.log('entra en la casa');
	    		$('body,html').animate(
	    			{scrollTop : 0}, 500);
	    		return false;
			});
			$(window).scroll(function(){
			    if ($(this).scrollTop() > 0) {
			        $('#boton-top').fadeIn();
			    } else {
			        $('#boton-top').fadeOut();
			    }
			});
		});
	</script>
</head>
<body>
	<div class="main">
		<?php include "static/_form.php" ?>
	</div>
	<article>
		<?php 
			/**
			* 
			*/
			class Index
			{
				
				static public function main()
				{
					if (isset($_POST['continente'])) {
						require 'Continente.php';
						$conti = new Continente($_POST['continente']);
						$conti->abrirDB();
						echo $conti->hacerConsulta();
						$conti->cerrarDB();
					}
				}
			}
			Index::main();
		?>
	</article>
	<span id="boton-top">
		<img src="../img/up.png" alt="Casa de up">
	</span>
	
</body>
</html>
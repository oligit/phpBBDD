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
			$('#cookie').click(function(e) {
				$('.cookie').css('display', 'none');
			});
			/*
			var orderBy = document.getElementById('orderBy');
			var direccion = document.getElementById('direccion');
			orderBy.addEventListener('change', mandaOrderBy);
			orderBy.addEventListener('change', mandaDireccion);*/
			$('#orderBy').change(function (e) {				.
				var r = '?continente='+$('#continente').val()+'&orderBy='+$('#orderBy').val()+'&direccion='+$('#direccion').val();
				console.log(window.location.href+r);
				window.location.replace(window.location.href+r);
			});

			$('#direccion').change(function(e) {
				var r = '?continente='+$('#continente').val()+'&orderBy='+$('#orderBy').val()+'&direccion='+$('#direccion').val();
				console.log(window.location.href+r);
				window.location.replace(window.location.href+r);
			});
		});
	</script>
</head>
<body>
	<h1 style="color: #fff;"><?php echo $_GET['orderBy']; ?></h1>
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
					if (isset($_GET['continente'])) {
						require 'Continente.php';
						$conti = new Continente($_GET['continente'], $_GET['order'], $_GET['direccion']);
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
	<div class="cookie">
		<p>Aceptas las cookies de este sitio, nano? <button id="cookie">Aceptar</button></p>
	</div>
	<footer>
		<p class="footer">
			<a href="https://github.com/oligit" class="footer" target="_blank">
				&copy;Jorge Olivas Agudo
			</a>
		</p>
	</footer>
</body>
</html>
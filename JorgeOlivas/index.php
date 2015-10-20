<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Búsqueda de paises</title>
	<link rel="stylesheet" href="css/main.css">
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="js/main.js"></script>
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
<?php 
	include '../config.php';
	require_once('Database.php');
	require_once('Main.php');
	$dbData = array(SERVER, USER, PASS, 'world');
	$main = new Main($dbData);
 ?>
<body>
	<header>
		<h1>BÚSQUEDA DE PAISES</h1>
	</header>
	<article>
		<section class="header">
			<fieldset>
				<legend>Ordena los paises por: </legend>
				<div class="p30">
					<label for="continente">Continente</label>
					<select name="continente" id="continente">
						<?php  
							if (!isset($_POST['Nombre'])){
								echo $main->selectPais2();	
							} else{
								echo $main->selectPais();
							}
							?>
					</select>
				</div>
				<div class="p30">
					<label for="orden">Orden: </label>
					<select name="orden" id="orden">
						<option value="Nombre">Nombre</option>
						<option value="Capital">Capital</option>
						<option value="Superficie">Superficie</option>
						<option value="Poblacion">Poblacion</option>
						<option value="Densidad">Densidad</option>
					</select>
				</div>
				<div class="p30">
					<select name="direccion" id="direccion">
						<option value="asc">Ascendente</option>
						<option value="desc">Descendente</option>
					</select>
				</div>
				
			</fieldset>
		</section>
		<section class="content">
			<?php if (!isset($_POST['Nombre'])) {echo $main->selectMain();} ?>
		</section>
	</article>
	<footer>
		
		<p class="footer">
			&copy;Jorge Olivas Agudo
		</p>
		<p class="footer">
			<a href="https://github.com/oligit" target="_blank"><img src="img/git.ico" alt="Icono de github" class="footer"></a>
		</p>		
	</footer>
	<span id="boton-top">
		<img src="img/up.png" alt="Casa de up">
	</span>
</body>
</html>
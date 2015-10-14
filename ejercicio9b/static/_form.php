<form action="index.php" method="POST">
	<fieldset>
		<legend>Selecciona un continente</legend>
		<select name="continente" id="continente">
			<?php $retVal = (isset($_POST['continente'])) ? $_POST['continente'] : 'Asia' ; ?><option value="Asia">Asia</option>
			<option value="Europe">Europe</option>
			<option value="North America">North America</option>
			<option value="Africa">Africa</option>
			<option value="Oceania">Oceania</option>
			<option value="Antartica">Antartica</option>
			<option value="South America">South America</option>
		</select>
		<input type="submit" value="Mostrar continentes">
	</fieldset>
	
</form>
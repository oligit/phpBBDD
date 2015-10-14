<form action="index.php" method="POST">
	<fieldset>
		<legend>Selecciona un continente</legend>
		<select name="continente" id="continente">
			<option value="Asia">Asia</option>
			<option value="Europe">Europe</option>
			<option value="North America">North America</option>
			<option value="Africa">Africa</option>
			<option value="Oceania">Oceania</option>
			<option value="Antartica">Antartica</option>
			<option value="South America">South America</option>
		</select>
		<label for="orderBy">Ordenar por:</label>
		<select name="orderBy" id="orderBy">
			<option value="superficie">Superficie</option>
			<option value="poblacion">Pobración</option>
			<option value="densidad">Densidad</option>
			<option value="capital">Capital</option>
		</select>
		<label for="direccion">Tipo de orden:</label>
		<select name="direccion" id="direccion">
			<option value="asc">Ascendente</option>
			<option value="desc">Descendente</option>
		</select>
	</fieldset>
	
</form>
jQuery(document).ready(function($) {
	$('#continente').change(dale);
	$('#orden').change(dale);
	$('#direccion').change(dale);

	function dale () {
		//console.log(e.target.value); seleccionamos el pais en cuestión
		var c = $('#continente').val();
		var o = $('#orden').val();
		var d = $('#direccion').val();

		$.ajax({
			url: 'controllers/continentController.php',
			type: 'POST',
			data: {continente: c, orden: o, direccion: d},
			success: function (response) {
				var arr = $.parseJSON(response);
				//console.dir(arr);
				var tabla = '<table><tr><td>Nombre</td><td>Capital</td><td>Superficie</td><td>Población</td><td>Densidad</td></tr>';
				for ( var i = 0; i<arr.length; i++) {
					tabla += '<tr><td>'+arr[i]['Nombre']+'</td><td>'+arr[i]['Capital']+'</td><td>'+arr[i]['Superficie']+' km<sup>2</sup></td><td>'+arr[i]['Poblacion']+' habitantes</td><td>'+arr[i]['Densidad']+' hab/km<sup>2</sup></td></tr>';
					console.dir(arr[i]);
				}
				tabla += '</table>';
				$('section.content').html(tabla);
			}
		});	
	}
});
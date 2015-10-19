	// var btnTransferir = document.getElementById('btnTransferir');
	// var btnConfirmar = document.getElementById('btnConfirmar');
	// var btnCancelar = document.getElementById('btnCancelar');

	// btnTransferir.addEventListener('click', procesar);
	// btnConfirmar.addEventListener('click', procesar);
	// btnCancelar.addEventListener('click', procesar);

	// function procesar (e) {
	// 	var cuentaO = document.getElementById('cuentaO').value;
	// 	var cuentaD = document.getElementById('cuentaD').value;
	// 	var cantidad = document.getElementById('cantidad').value;
	// 	var url = '?cuentaO='+cuentaO+'&cuentaD='+cuentaD+'&cantidad='+cantidad+'&accion='+e.target.id;
	// 	open('index.php'+url, '_self');
	// };
jQuery(document).ready(function($) {
	$('#btn').click(function() {
		console.info('ey');
		var country = $('#pais').val();
		$.ajax({
			url: 'paisescontroller.php',
			type: 'POST',
			data: {pais: country},
			success: function (response){
				var arr = $.parseJSON(response);
				var tabla = '<table><tr><td>Capital</td><td>Superficie</td><td>Población</td><td>Densidad</td></tr><tr><td>'+arr['Capital']+'</td><td>'+arr['Superficie']+'</td><td>'+arr['Poblacion']+'</td><td>'+arr['Densidad']+'</td></tr></table>';
				$('#salida').html(tabla);
			}
		});
	});
	$('#pais').keyup(function(event) {
		if (event.keyCode>=65 && event.keyCode<=90 || event.keyCode == 32) {
			console.log($('#pais').val());
			// var k = String.fromCharCode(event.keyCode).toLowerCase()+'';
			var k = $('#pais').val().toLowerCase();
			console.log(k);
			$.ajax({
				url: 'informacioncontroller.php',
				type: 'POST',
				data: {key: k},
				success: function (response) {
					var res = $.parseJSON(response);
					console.dir(res);
					for (var re in res) {
						$('#flotante').html(res+'<br>');
					}
				}
			});			
		};
	});
});
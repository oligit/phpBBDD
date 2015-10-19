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
			url: 'prueba.php',
			type: 'GET',
			data: {pais: country},
			success: function (response) {
				$('#salida').html(response);
			}
		});
	});
});
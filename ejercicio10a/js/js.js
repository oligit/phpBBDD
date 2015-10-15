window.onload = main;
function main () {
	document.getElementById('btn').addEventListener('click', enviar);
	function enviar (e) {
		var n, a, c, p, action;	
		n = document.getElementById('nombre');	
		a = document.getElementById('apellidos');	
		c = document.getElementById('ciudad');	
		p = document.getElementById('pais');	
		action = 'update';
		var url = '?nombre='+n.value+'&apellidos='+a.value+'&ciudad='+c.value+'&pais='+p.value+'&action='+action;
		open('index.php'+url, '_self');
	};
	document.getElementById('estudiante').addEventListener('change', cargaInputs);
	function cargaInputs (e) {
		var a = e.target.value;
		var url = '?apellidos='+a;
		open('index.php'+url, '_self');
	};				
};
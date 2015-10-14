window.onload = main;
function main () {
	document.getElementById('btn').addEventListener('click', enviar);
	function enviar (e) {
		var n, a, c, p, s;	
		n = document.getElementById('nombre');	
		a = document.getElementById('apellidos');	
		c = document.getElementById('ciudad');	
		p = document.getElementById('pais');	
		s = '';
		var url = '?nombre='+n.value+'&apellidos='+a.value+'&ciudad='+c.value+'&pais='+p.value;
		open('index.php'+url, '_self');
	};
	document.getElementById('estudiante').addEventListener('change', cargaInputs);
	function cargaInputs (e) {
		var a = e.target.value;
		var url = '?apellidos='+a;
		open('index.php'+url, '_self');
	};				
};
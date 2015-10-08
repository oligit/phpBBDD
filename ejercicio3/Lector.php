<?php 
	/**
	* 
	*/
	class Operador
	{
		private $descriptor;
		private $texto;
		private $archivo;
		private $modo;
		private $coincidencia;
		function __construct($archivo, $modo, $nombre)
		{
			$this->archivo = $archivo;
			$this->modo = $modo;
			$this->aguja = $nombre;
		}
		private function leer()
		{
			$this->descriptor = fopen($this->archivo, $this->modo);
			$this->texto = fread($this->archivo, filesize($this->archivo));
		}
		public function buscar()
		{
			$this->leer();
			$this->coincidencia = strstr($this->texto, $this->nombre);
			if ($this->coincidencia) {
				return "Bienvenido ".$this->nombre;
			} else {
				return "Fuera de aquí intruso de mierda.";
			}
			$this->cerrar();
		}
		private function cerrar()
		{
			fclose($this->archivo);
		}
	}
 ?>
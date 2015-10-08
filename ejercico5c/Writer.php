<?php 
	/**
	* 
	*/
	class Writer
	{
		private $txt = 'libro.txt';
		private $texto;
		private $open;
		private $lectura;
		function __construct($nombre, $texto)
		{
			$this->texto = $nombre.';'.$texto.':';
		}
		private function abrir($m)
		{
			$this->open = fopen($this->txt, $m);
		}
		public function escribir($m)
		{
			$this->abrir($m);
			fwrite($this->open, $this->texto);
			$this->cerrar();
		}
		public function leer($m)
		{
			$patron = '/(?<nombre>.*);(?<texto>.*):/';
			$this->abrir($m);
			$this->lectura = fread($this->txt, filesize($this->txt));
			preg_match_all($patron, $this->txt, $matches);
			return $matches;
		}
		private function cerrar()
		{
			fclose($this->open);
		}
	}
 ?>
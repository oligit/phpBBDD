<?php 
	/**
	* 
	*/
	class File
	{
		private $fileName;
		private $fileOpenTipe
		private $fileref;
		private $fileSize;
		private $fileData;
		private $userData;

		function __construct($nombreArchivo, $tipoApertura)
		{
			clearstatcache();
			$this->fileName = $nombreArchivo;
			$this->fileOpenTipe = $tipoApertura;
			$this->fileSize = ($this->fileName) ? filesize($this->fileName) : $nombreArchivo;

		}
		public function leerFile()
		{
			if ($this->abrirFile()) {
				# code...
			}
		}
	}
 ?>
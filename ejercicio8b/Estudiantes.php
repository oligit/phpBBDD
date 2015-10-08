<?php 
	/**
	* 
	*/
	class Estudiantes extends Database
	{
		private $userdata;
		private $db;
		private $sql;
		private $sqlResult;
		function __construct($dataConection, $userdata){
			parent::__construct($dataConection);
			$this->userdata = $userdata;
		}
		
		private function opciones(){
			
		}
		private function insertar(){
			$this->abrirDb();
			$this->sql = "INSERT INTO alumnos values (null, '".$this->userdata['nombre']."', '".$this->userdata['apellidos']."', '".$this->userdata['ciudad']."', '".$this->userdata['pais']."')";
			$this->
		}
		private function mostrarInfo(){
			
		}
		
		
	}
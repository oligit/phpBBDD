<?php 
	/**
	* 
	*/
	include 'Database.php';
	class Estudiantes extends Database
	{
		private $userdata;
		private $db;
		private $error;
		private $sql;
		private $result;
		function __construct($dataConection, $userdata){
			parent::__construct($dataConection);
			$this->userdata = $userdata;
		}
		
		private function opciones(){
			
		}
		public function editar(){
			$this->abrirDb();
			$this->sql['editar'] = "update alumnos set nombre='{$this->userdata[0]}', apellidos='{$this->userdata[1]}', ciudad='{$this->userdata[2]}', pais='{$this->userdata[3]}' where apellidos = '{$this->userdata[1]}'";
			$this->result['editar'] = $this->mysqli->query($this->sql['editar']);
			if ($this->result['editar']) return $this->userdata;
			else return $this->error['editar'];
		}
		private function insertar(){
			$this->abrirDb();
			$this->sql['insertar'] = "INSERT INTO alumnos values (null, '".$this->userdata['nombre']."', '".$this->userdata['apellidos']."', '".$this->userdata['ciudad']."', '".$this->userdata['pais']."')";
			$this->result['insertar'] = $this->mysqli->query($this->sql['insertar']);
			$this->cerrarDb();
			if ($this->result['insertar']) return true;
			else return $this->error['insertar'];
		}
		private function mostrarInfo(){
			
		}
		
		
	}
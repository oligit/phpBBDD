<?php 
	/**
	* 
	*/
	include 'Database.php';
	class Estudiantes extends Database
	{
		private $userdata;
		private $db;
		private $error = array('insertar'=>'Error al insertar', 'editar'=>'Error al hacer el update','consultar'=>'Error en el select');
		private $sql;
		private $res;
		function __construct($dataConection, $userdata){
			parent::__construct($dataConection);
			$this->userdata = $userdata;
		}
		
		private function opciones(){
			
		}
		public function update(){
			$this->abrirDb();
			$this->sql = "update alumnos set nombre=\"{$this->userdata['nombre']}\", apellidos=\"".$this->userdata['apellidos']."\", ciudad=\"".$this->userdata['ciudad']."\", pais=\"".$this->userdata['pais']."\" where apellidos = \"".$this->userdata['apellidos']."\"";
			$this->res = $this->mysqli->query($this->sql);
			$this->cerrarDb();
			if ($this->res) return $this->consultar();//return $this->mostrarInfo();
			else return $this->error['editar'];
		}
		private function insertar(){
			$this->abrirDb();
			$this->sql = "INSERT INTO alumnos values (null, '".$this->userdata['nombre']."', '".$this->userdata['apellidos']."', '".$this->userdata['ciudad']."', '".$this->userdata['pais']."')";
			$this->res = $this->mysqli->query($this->sql);
			$this->cerrarDb();
			if ($this->res) return true;
			else return $this->error['insertar'];
		}
		private function consultar(){
			$this->abrirDb();
			$this->sql = "select * from alumnos where apellidos='".$this->userdata['apellidos']."'";
			$this->res = $this->mysqli->query($this->sql);
			$this->cerrarDb();
			if ($this->res) return $this->mostrarInfo();
			else return $this->error['consultar'];
		}
		private function mostrarInfo(){
			$html = "";
			while ($arr = $this->res->fetch_array()){
				$html .= "<input type=\"text\" placeholder=\"nombre\" name=\"nombre\" id=\"nombre\" value=".$arr['nombre'].">";
				$html .= "<input type=\"text\" placeholder=\"apellidos\" name=\"apellidos\" id=\"apellidos\" value=".$arr['apellidos'].">";
				$html .= "<input type=\"text\" placeholder=\"ciudad\" name=\"ciudad\" id=\"ciudad\" value=".$arr['ciudad'].">";
				$html .= "<input type=\"text\" placeholder=\"pais\" name=\"pais\" id=\"pais\" value=".$arr['pais'].">";
			}
			return $html;
		}
		
		
	}
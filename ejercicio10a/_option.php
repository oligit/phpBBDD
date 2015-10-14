<?php 
	/**require 'Database.php';
	
	* 
	*/
	class Option extends Database
	{
		private $sql;
		private $res;
		function __construct($dataConection)
		{
			parent::__construct($dataConection);
		}
		function pintarOpcion($get) {
			$this->abrirDb();
			$this->sql = "SELECT nombre, apellidos FROM alumnos";
			$this->res = $this->mysqli->query($this->sql);
			
			if($this->res) return $this->componer($get);
			else return "Error";
		}
		private function componer($g){
			$html = "";
			while ($arr = $this->res->fetch_array()){
				$s = ($g && $g['apellidos']==$arr['apellidos']) ? 'selected' : ''; //si los apellidos del get son iguales pone un selected para que el select no se reestablezca a default
				$html .= "<option ".$s." value='".$arr['apellidos']."'>".$arr['apellidos']."</option>";
			}
			$this->cerrarDb();
			return $html;
		}
	}
 ?>
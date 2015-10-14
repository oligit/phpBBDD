<?php 
	/**
	* 
	*/
	class Input extends Database
	{
		private $res;
		private $sql;
		function __construct($dataForDb)
		{
			parent::__construct($dataForDb);
		}
		function pintarInput($get){
			if (func_num_args()==1){
				$this->abrirDb();
				$this->sql = "SELECT * FROM alumnos WHERE apellidos ='".$get['apellidos']."'";
				$this->res = $this->mysqli->query($this->sql);
				if ($this->res) return $this->componer(true);
			} else{
				return $this->componer(false);
			}
		}
		function componer($b){
			$html = "";
			if ($b){
				while ($arr = $this->res->fetch_array()) {
					$html .= "<input type=\"text\" placeholder=\"nombre\" name=\"nombre\" id=\"nombre\" value=".$arr['nombre'].">";
					$html .= "<input type=\"text\" placeholder=\"apellidos\" name=\"apellidos\" id=\"apellidos\" value=".$arr['apellidos'].">";
					$html .= "<input type=\"text\" placeholder=\"ciudad\" name=\"ciudad\" id=\"ciudad\" value=".$arr['ciudad'].">";
					$html .= "<input type=\"text\" placeholder=\"pais\" name=\"pais\" id=\"pais\" value=".$arr['pais'].">";
				}
			} else {
				$html .= "<input type=\"text\" placeholder=\"nombre\" name=\"nombre\" id=\"nombre\">";
				$html .= "<input type=\"text\" placeholder=\"apellidos\" name=\"apellidos\" id=\"apellidos\">";
				$html .= "<input type=\"text\" placeholder=\"ciudad\" name=\"ciudad\" id=\"ciudad\">";
				$html .= "<input type=\"text\" placeholder=\"pais\" name=\"pais\" id=\"pais\">";
				/*<input type="text" placeholder="nombre" name="nombre" id="nombre">
				<input type="text" placeholder="apellidos" name="apellidos" id="apellidos">
				<input type="text" placeholder="ciudad" name="ciudad" id="ciudad">
				<input type="text" placeholder="pais" name="pais" id="pais">*/
			}
			return $html;
		}
	}
 ?>
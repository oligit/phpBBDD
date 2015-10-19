<?php
include 'Database.php';
class Paises extends Database
{
	private $res;
	private $sql;
	private $nombre;
	function __construct($name, $dataConection){
		parent::__construct($dataConection);
		$this->nombre = $name;
	}
	public function imprimeCapital(){
		$this->abrirDB();
		$this->sql = "SELECT co.Capital as 'Capital', ci.Name as 'Nombre' FROM world.city ci, world.country co where ci.ID = co.Capital and co.Name = '".$this->nombre."';";
		$this->res = $this->mysqli->query($this->sql);
		$this->cerrarDb();
		if ($this->res) return $this->componer();
		else return $this->mysqli->error;
	}
	private function componer(){
		$html = "<table>";
		// while ($arr = $this->res->fetch_array()) {
			$html .= "<tr>";
			// $html .= "<td>".$arr['Capital']."</td>";
			$html .= "<td>".$this->res->fetch_array()['Nombre']."</td>";
			$html .= "</tr>";
		// }		
		$html .= "<table>";
		return $html;
	}
	
}
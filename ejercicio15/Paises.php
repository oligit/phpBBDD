<?php
require_once('Database.php');
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
		$this->sql = "SELECT ci.Name as 'Capital', co.SurfaceArea as 'Superficie', 
co.Population as 'Poblacion', (co.Population / co.SurfaceArea) as 'Densidad' 
FROM world.city ci, world.country co where ci.ID = co.Capital and co.Name = '".$this->nombre."';";
		$this->res = $this->mysqli->query($this->sql);
		$this->cerrarDb();
		if ($this->res) return $this->componer();
		else return $this->mysqli->error;
	}
	private function componer(){
		// $html = "<table>";
		// $html .= "<tr><td>Capital</td><td>Superficie</td><td>Población</td><td>Densidad</td></tr>";
		// while ($arr = $this->res->fetch_array()) {
		// 	$html .= "<tr>";
		// 	$html .= "<td>".$arr['Capital']."</td>";
		// 	$html .= "<td>".$arr['Superficie']."</td>";
		// 	$html .= "<td>".$arr['Poblacion']."</td>";
		// 	$html .= "<td>".$arr['Densidad']."</td>";
		// 	$html .= "</tr>";
		// }		
		// $html .= "<table>";
		return json_encode($this->res->fetch_array());
	}
	
}
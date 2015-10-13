<?php
require 'Database.php';

class Continente extends Database
{
	private static $tablaDB = 'country';
	private $continent;
	private $sql; //aquí va el select
	private $result; //objeto resultado
	
	function __construct($c) {
		parent::__construct();
		$this->continent = (string) $c;
	}
	
	function hacerConsulta(){
		$tabla = self::$tablaDB;
		$this->sql = "select Name, SurfaceArea as sur, Population as pop from ".$tabla." where continent = '".$this->continent."'";
		$this->result = $this->mysqli->query($this->sql);
		if ($this->result) return $this->pintar();
		else return "Ese continente no existe, se lo habrá comido tu vieja la muy gorda.";
	}
	private function pintar() {
		$html = "<section>";
		$html .= "<table>";
		$html .= "<tr>";
		$html .= "<td>Pais</td>";
		$html .= "<td>Superficie</td>";
		$html .= "<td>Población</td>";
		$html .= "</tr>";
		while ($arr = $this->result->fetch_array()){
			$html .= "<tr>";
			$html .= "<td>".$arr['Name']."</td>";
			$html .= "<td>".$arr['sur']."</td>";
			$html .= "<td>".$arr['pop']."</td>";
			$html .= "</tr>";
		}
		$html .= "</table>";
		$html .= "</section>";
		return $html;
	}
}
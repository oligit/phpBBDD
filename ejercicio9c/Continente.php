<?php
require 'Database.php';

class Continente extends Database
{
	private static $tablaDB1 = 'world.country';
	private static $tablaDB2 = 'world.city';
	private $continent;
	private $sql; //aquí va el select
	private $sql2;
	private $result; //objeto resultado
	
	function __construct($c) {
		parent::__construct();
		$this->continent = (string) $c;
	}
	
	function hacerConsulta(){
		$tabla1 = self::$tablaDB1;
		$tabla2 = self::$tablaDB2;
		$this->sql = "SELECT c.Name, c.SurfaceArea as sur, c.Population as pop , c.Population/c.SurfaceArea as den, ci.Name as cap FROM ".$tabla1." as c, ".$tabla2." as ci where c.Capital = ci.ID and Continent = '".$this->continent."';";
		$this->result = $this->mysqli->query($this->sql);
		if ($this->result) return $this->pintar();
		else return "Ese continente no existe, se lo habrá comido tu vieja la muy gorda.";
	}
	private function calcularTotales(){
		$tabla1 = self::$tablaDB1;
		$this->sql2 = "select sum(SurfaceArea)  as 'AreaTotal', sum(Population) as 'PoblacionTotal', sum(Population)/sum(SurfaceArea) as 'DensidadTotal' from ".$tabla1;
		$this->result = $this->mysqli->query($this->sql2);
		if ($this->result) return $this->pintar2();
		else return "La subconsulta está mal";
	}
	private function pintar2(){
		$html = "<tr>";
		$html .= "<td></td>";
		$html .= "<td class='negrita'>Área total</td>";
		$html .= "<td class='negrita'>Población total</td>";
		$html .= "<td class='negrita'>Densidad total</td>";
		$html .= "<td></td>";
		$html .= "</tr>";
		$html .= "<tr>";
		while ($arr = $this->result->fetch_array()){
			$html .= "<td></td>";
			$html .= "<td>".$arr['AreaTotal']." km<sup>2</sup></td>";
			$html .= "<td>".$arr['PoblacionTotal']." habitantes</td>";
			$html .= "<td>".$arr['DensidadTotal']." hab/km<sup>2</sup></td>";
			$html .= "<td></td>";
		}
		$html .= "</tr>";
		return $html;		
	}
	private function pintar() {
		$html = "<section>";
		$html .= "<table class='table'>";
		$html .= "<tr>";
		$html .= "<td>Pais</td>";
		$html .= "<td>Superficie</td>";
		$html .= "<td>Población</td>";
		$html .= "<td>Densidad de población</td>";
		$html .= "<td>Capital</td>";
		$html .= "</tr>";

		while ($arr = $this->result->fetch_array()){
			$html .= "<tr>";
			$html .= "<td><a target='_blank' href='https://www.google.es/maps/place/".$arr['Name']."'>".$arr['Name']."</a></td>";
			$html .= "<td>".$arr['sur']." km<sup>2</sup></td>";
			$html .= "<td>".$arr['pop']." habitantes</td>";
			$html .= "<td>".$arr['den']." hab/km<sup>2</sup></td>";
			$html .= "<td><a target='_blank' href='https://www.google.es/maps/place/".$arr['cap']."'>".$arr['cap']."</a></td>";
			$html .= "</tr>";
		}
		$html .= $this->calcularTotales();
		$html .= "</table>";
		$html .= "</section>";
		return $html;
	}
}
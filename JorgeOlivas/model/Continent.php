<?php 
	/**
	* clase continente
	*/
	require_once('../Database.php');
	class Continent extends Database
	{
		private $res;
		private $sql;
		private $contiData; //tiene el nombre del continente, el dato para ordenar, y si es descendente o ascendente
		function __construct($dbData, $data)
		{
			parent::__construct($dbData);
			$this->contiData = $data;
		}
		function imprimeContinente(){
			$this->abrirDB();
			$this->sql = "SELECT co.Name as 'Nombre', ci.Name as 'Capital', co.SurfaceArea as 'Superficie', 
co.Population as 'Poblacion', (co.Population/co.SurfaceArea) as 'Densidad'
from country co, city ci
where co.Capital = ci.ID and co.Continent = '{$this->contiData['continente']}'
order by {$this->contiData['orden']} {$this->contiData['direccion']}";
			$this->res = $this->mysqli->query($this->sql);
			if ($this->res) return $this->componer();
		}
		private function componer() {
			$html = array();
			while ($arr = $this->res->fetch_assoc()) {
				array_push($html, $arr);
			}
			return json_encode($html);
		}
	}
 ?>
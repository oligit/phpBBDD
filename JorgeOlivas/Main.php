<?php
class Main extends Database{
	private $res;
	private $sql;
	private $aleatorio;
	private $continentes = array('Asia', 'Europe', 'North America', 'Africa', 'Oceania', 'Antarctica', 'South America');
	//private $opciones = array('Nombre', 'Capital', );
	function __construct($dataConection){
		parent::__construct($dataConection);
		$this->aleatorio = rand(0, 6);
	}
	function selectPais(){
		$this->abrirDb();
		$this->sql = "SELECT Continent FROM world.country group by Continent;";
		$this->res = $this->mysqli->query($this->sql);
		$this->cerrarDb();
		if ($this->res) return $this->componerPais();
		else return false;
	}
	public function selectMain()
	{
		$this->abrirDb();
		$this->sql = "SELECT co.Name as 'Nombre', ci.Name as 'Capital', co.SurfaceArea as 'Superficie', 
co.Population as 'Poblacion', (co.Population/co.SurfaceArea) as 'Densidad'
from country co, city ci
where co.Capital = ci.ID and co.Continent = '{$this->continentes[$this->aleatorio]}'
order by 'Nombre' asc";
		$this->res = $this->mysqli->query($this->sql);
		if ($this->res) return $this->primeraCarga();
		else return false;
	}
	private function primeraCarga()
	{
		$html = "<table>";
		$html .= "<tr><td>Nombre</td><td>Capital</td><td>Superficie</td><td>Población</td><td>Densidad</td></tr>";
		while ($arr = $this->res->fetch_assoc()) {
			$html .= "<tr><td>".$arr['Nombre']."</td><td>".$arr['Capital']."</td><td>".$arr['Superficie']." km<sup>2</sup></td><td>".$arr['Poblacion']." habitantes</td><td>".$arr['Densidad']." hab/km<sup>2</sup></td></tr>";
		}
		$html .= "</table>";
		return $html;
	}
	function selectPais2(){
		$this->abrirDb();
		$this->sql = "SELECT Continent FROM world.country group by Continent;";
		$this->res = $this->mysqli->query($this->sql);
		$this->cerrarDb();
		if ($this->res) return $this->componerPais2();
		else return false;
	}
	private function componerPais2(){ //primera carga, m odo aleatorio
		$html = '';
		$i = 0;
		$selected = '';
		while ($arr = $this->res->fetch_array()){
			if ($arr['Continent'] == $this->continentes[$this->aleatorio]){
				$selected = 'selected';
			}else{
				$selected = '';
			}
			$html .= "<option ".$selected." value='".$arr['Continent']."'>".$arr['Continent']."</option>";
			
		}
		return $html;
	}
	private function componerPais() {
		$html = '';
		$i = 0;
		while ($arr = $this->res->fetch_array()){
			$html .= "<option value='".$arr['Continent']."'>".$arr['Continent']."</option>";
		}
		return $html;
	}
}
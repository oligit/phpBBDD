<?php 

	/**
	* 
	*/
	require_once('Database.php');
	class Informacion extends Database
	{
		private $res;
		private $sql;
		private $key;
		function __construct($k, $dataConection)
		{
			parent::__construct($dataConection);
			$this->key = $k;
		}
		function consultar(){
			$this->abrirDb();
			$this->sql = "SELECT Name FROM country where name like '".$this->key."%' limit 0, 1000";
			$this->res = $this->mysqli->query($this->sql);
			$this->cerrarDb();
			if($this->res) return $this->componer();
		}
		private function componer()
		{
			$html = array();
			while ($arr = $this->res->fetch_assoc()) {
// 				$html[] = $arr['Name'];
				array_push($html, $arr['Name']);
			}
			return json_encode($html);
		}
		
	}
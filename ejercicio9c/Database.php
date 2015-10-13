<?php 
	/**
	* 
	*/
	abstract class Database
	{
		private $dataConection;
		
		protected $mysqli; //lo suyo seria que fuese privado y tuviera sus set y get

		function __construct()
		{
			include '../config.php';
			$this->dataConection[0] = SERVER;
			$this->dataConection[1] = USER;
			$this->dataConection[2] = PASS;
			$this->dataConection[3] = 'world';
		}
		function abrirDB() {
			$this->mysqli = new mysqli($this->dataConection[0],$this->dataConection[1],$this->dataConection[2],$this->dataConection[3]);
			if ($this->mysqli->error) {
				echo "Error: ".$this->mysqli->errno." (".$this->mysqli->error.")";
				exit();
			}
		}
		function cerrarDB() {
			$this->mysqli->close();
		}
	}
 ?>
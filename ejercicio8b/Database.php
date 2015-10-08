<?php
	/**
	* 
	*/
	abstract class Database
	{
		private $dataConection;
		private $mysqli;
		private $sqlQuery;
		private $sqlResult;
		
		function __construct($dataConection)
		{
			$this->dataConection = $dataConection;
		}
		public function abrirDb(){
			$this->mysqli = new mysqli($this->dataConection[0], $this->dataConection[1], $this->dataConection[2], $this->dataConection[3], $this->dataConection[4]);
			if ($this->mysqli->connect_error) return false;
			else return true;
		}
		public function cerrarDb(){
			$this->mysqli->close();
		}
		
	}

<?php 
	/**
	* 
	*/
	//require('../config.php');
	abstract class Database
	{
		private $dataConection;
		protected $mysqli;
		private $sqlQuery;
		private $sqlResult;
		
		function __construct($dataConection)
		{
			$this->dataConection = $dataConection;
		}
		protected function abrirDb(){
			$this->mysqli = new mysqli($this->dataConection[0], $this->dataConection[1], $this->dataConection[2], $this->dataConection[3]);
			if ($this->mysqli->error) exit();
			else return true;
		}
		protected function cerrarDb(){
			$this->mysqli->close();
		}
		
	}

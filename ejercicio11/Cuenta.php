<?php 
	/**
	* 
	*/
	include 'Database.php';
	class Cuenta extends Database
	{
		private $res;
		private $sql;
		static private $error = array('consultar'=>'Error al consultar el saldo');
		function __construct($dbData)
		{
			parent::__construct($dbData);
		}
		public function consultarSaldo()
		{
			$this->abrirDb();
			$this->sql = "select * from cuentas where propietario = 'willy'";
			$this->res = $this->mysqli->query($this->sql);
			$this->cerrarDb();
			if ($this->res) return $this->pintarSaldo();
			else return $this->error['consultar'];
		}
		private function pintarSaldo() {
			$html = "";
			while ($arr = $this->res->fetch_array()){
				$html .= "<tr>";
				$html .= "<td>".$arr['id']."</td>";
				$html .= "<td>".$arr['saldo']."</td>";
				$html .= "</tr>";
			}
			return $html;
		}
	}
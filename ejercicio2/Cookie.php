<?php 

	class Cookie
	{
		private $nS = 0;
		function __construct()
		{
			if (isset($_COOKIE['contador'])) {
				$this->nS = $_COOKIE['contador'];
			} else {
				$this->nS = 1;
				setcookie('contador', $this->nS);
			}
		}
		public function informar()
		{
			if ($_COOKIE['contador'] == 1) {
				$salida = 'Es la primera vez que estás aquí';
			} else {
				$salida = 'Has estado aquí <b>$this->nS </b> veces';
			}
			$this->aumentarVisitas();
			return $salida;
		}
		public function aumentarVisitas()
		{
			$this->nS++;
			$_COOKIE['contador'] = $this->nS;
		}
		public function borrarCookie()
		{
			
		}
	}
 ?>
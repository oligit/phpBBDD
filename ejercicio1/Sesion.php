<?php 
	/**
	* 
	*/
	class Sesion
	{
		private $_sesionNumber = 0;
		function __construct()
		{
			session_start();
			if (isset($_SESSION['accesos'])) {
				$this->_sesionNumber = $_SESSION['accesos'];
			} else {
				$this->_sesionNumber = 1;
				$_SESSION['accesos'] = $this->_sesionNumber;
			}
		}
		public function informar()
		{
			if ($this->_sesionNumber == 1) {
				$mensaje  = 'Es la primera vez que accedes a esta página';
			} else {
				$mensaje = "Has accedido a esta página <b>$this->_sesionNumber veces </b>";
			}
			$this->aumentarSesion();
			return $mensaje;
		}
		private function aumentarSesion()
		{
			$this->_sesionNumber++;
			$_SESSION['accesos'] = $this->_sesionNumber;
		}
		public function borrarSesion()
		{
			// $_SESSION = array(); //cambiar por la línea de abajo
			session_destroy();
			session_unset();
			$params = session_get_cookie_params();
			
			setcookie(session_name(), "", time() - 3600,
                		$params['path'], $params['domain'],
                		$params['secure'], $params['httponly']                        
					);
		}
	}
 ?>
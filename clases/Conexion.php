<?php 

	class Conectar{
		public function conexion() {
			$servidor = "localhost";
			$usuario = "root";
			$password = "";
			$base = "ciarh";
			$puerto="3307";

			$conexion = mysqli_connect($servidor, 
										$usuario, 
										$password, 
										$base,
									    $puerto);
			$conexion->set_charset('utf8mb4');
			return $conexion;
		}
	}

 ?>
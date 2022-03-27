<?php
	
	class Conectar {
		
		public static function conexion(){
			
			$conexion = new mysqli("producto.cia1viluxmi5.us-east-1.rds.amazonaws.com", "admin", "12345678", "producto");
			return $conexion;
			
		}
	}
?>
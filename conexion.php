<?php  
//configuracion de la conexion, el mysql debe estar igual we 
$servidor = 'localhost';
$base_datos = 'guinda';
$usuario = 'root';
$clave = '';


$con = new PDO("mysql:host=$servidor; dbname=$base_datos", $usuario, $clave);
	
?>

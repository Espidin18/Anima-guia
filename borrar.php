<?php
require 'conexion.php';
include 'session.php';

if ($con == true) {
	
	if (isset($opcion)){

		$del = $con->prepare("DELETE FROM reportes WHERE idReporte=$opcion");
		
		$del->execute();
		
		
		 header("Location: gerenter.php");

		$con = null;
	}
	else {
	header("Location: gerenter.php");
	}
}
?>

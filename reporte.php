<?php
require 'conexion.php';
include 'session.php';


$reporte =  $_POST['reporte'];
$usuario = $login_session;

if ($con == true) {
	
	if ($_SESSION['tipo'] != 2){

	header("Location: agenter.php");
	
	}
	else {

		$insert1 = $con->prepare("INSERT INTO reportes SET reporte='$reporte', fechar = CURDATE() , usuarior='$usuario'");
		
		$insert1->execute();
		
		
		 header("Location: index.html");

		$con = null;
	}
}
 else {

 header("Location: index.html");

 }
?>

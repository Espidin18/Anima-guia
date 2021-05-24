<?php
require 'conexion.php';
include 'session.php';


$reporte =  $_POST['reporte'];
$usuario =  $_POST['usuario'];
$agente = $login_session;
$estado = 1;

if ($con == true) {
	
	if ($_SESSION['tipo'] == 2){

	header("Location: usuarior.php");
	
	}
		
		else if ($_SESSION['tipo'] == 5){


		$insert1 = $con->prepare("INSERT INTO reportes SET reporte='$reporte', fechar = CURDATE() , usuarior='$usuario', agenter='$agente', id='$estado'");
		
		$insert1->execute();
		
		
		 header("Location: agenter.php");

		$con = null;
	}
	else if ($_SESSION['tipo'] == 6){


		$insert1 = $con->prepare("INSERT INTO reportes SET reporte='$reporte', fechar = CURDATE() , usuarior='$usuario', agenter='$agente', id='$estado'");
		
		$insert1->execute();
		
		
		 header("Location: gerenter.php");

		$con = null;
}
 else {

 header("Location: index.html");

 }
}
?>

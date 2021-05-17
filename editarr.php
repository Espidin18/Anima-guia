<?php
require 'conexion.php';
include 'session.php';

		if (isset($_POST['visto'])){
			$row1=$row['idReporte'];
			$agente = $login_session;
			$insert2 = $con->prepare("UPDATE reportes SET agenter='$agente' WHERE idReporte=$row1");
			$insert2->execute();
	}
 else {

 header("Location: reporte.html");

 }
?>
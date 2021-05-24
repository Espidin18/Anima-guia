<?php
include("function.php");
$id = $_GET['id'];
		$tbl = "reportes";
		borrar($tbl,'idReporte',$id);
		header("location:../agenter.php");

?>

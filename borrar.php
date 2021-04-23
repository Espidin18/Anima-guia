<?php 
include("function.php");
$id = $_GET['id'];
delete('preguntas','idPregunta',$id);
header("location:borrap.php");
?>
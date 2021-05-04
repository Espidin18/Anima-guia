<?php
include 'conexion.php';
if(isset($_POST['eliminar'])){

$consulta = "DELETE FROM `preguntas` WHERE `preguntas`.`pregunta` = :pregunta";
$sql = $con-> prepare($consulta);
$id=trim($_POST['pregunta']);
$sql -> bindParam('pregunta', $id, PDO::PARAM_INT);

$sql->execute();
header("Location: FAQCRUD.php");
}else{
header("Location: index.html");
}
?>

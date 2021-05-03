<?php
include 'conexion.php';
if(isset($_POST['eliminar'])){

$consulta = "DELETE FROM `preguntas` WHERE `preguntas`.`pregunta` = :pregunta";
$sql = $con-> prepare($consulta);
$id=trim($_POST['pregunta']);
$sql -> bindParam('pregunta', $id, PDO::PARAM_INT);
header("Location: FAQCRUD.php");
$sql->execute();

}else{
header("Location: index.html");
}
?>

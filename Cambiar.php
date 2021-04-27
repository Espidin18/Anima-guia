<?php
include 'conexion.php';

if(isset($_POST['cambiar'])){
$preg=trim($_POST['preguntaNue']);
$resp=trim($_POST['respuestaNue']);
$idPre=trim($_POST['idNue']);


 $insert1 = $con->prepare("UPDATE `preguntas` SET `pregunta` = '$preg', `respuesta` = '$resp' WHERE `preguntas`.`idPregunta` = $idPre");

 $insert1->bindParam(':pregunta', $_POST['pregunta']);
 $insert1->bindParam(':respuesta', $_POST['respuesta']);

 //si no la regue al chile y todo esta correcto ejecuto lo anterior
 $insert1->execute();

 $con = null;
 header("Location: FAQCRUD.php");
}
 else {

 header("Location: FAQCRUD.php");

 }

?>

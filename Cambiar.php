<?php
include 'conexion.php';

if(isset($_POST['cambiar'])){


 $consulta = $con->prepare("UPDATE `preguntas` SET `pregunta` = :pregunta , `respuesta` = :respuesta WHERE `preguntas`.`idPregunta` = :idPregunta");
 $preg= $_POST['pregunta'];
 $resp= $_POST['respuesta'];
 $consulta>bindParam(':pregunta', $preg, PDO::PARAM_INT );
 $consulta->bindParam(':respuesta', $resp, PDO::PARAM_INT);

 //si no la regue al chile y todo esta correcto ejecuto lo anterior
 $consulta->execute();

 $con = null;
 header("Location: FAQCRUD.php");
}
 else {

 header("Location: FAQCRUD.php");

 }

?>

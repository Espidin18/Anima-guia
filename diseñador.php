<?php
require 'conexion.php';


if ($con == true) {


 $insert1 = $con->prepare("INSERT INTO preguntas (pregunta, respuesta) VALUES (:pregunta, :respuesta)");

 $insert1->bindParam(':pregunta', $_POST['pregunta']);
 $insert1->bindParam(':respuesta', $_POST['respuesta']);

 //si no la regue al chile y todo esta correcto ejecuto lo anterior
 $insert1->execute();

 $con = null;
 header("Location: http://192.168.0.2/bp/Anima%20Guinda/FAQCRUD.php");
}
 else {

 header("Location: http://192.168.0.2/bp/Anima%20Guinda/");

 }
?>

<?php
require 'conexion.php';


if ($con == true) {


 $insert1 = $con->prepare("INSERT INTO login (usuario, nombre) VALUES (:pregunta, :respuesta)");

 $insert1->bindParam(':pregunta', $_POST['pregunta']);
 $insert1->bindParam(':respuesta', $_POST['respuesta']);

 //si no la regue al chile y todo esta correcto ejecuto lo anterior
 $insert1->execute();

 $con = null;

 header("Location: FAQdiseñador.html");
}
 else {

 header("Location: index.html");

 }
?>

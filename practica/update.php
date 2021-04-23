<!DOCTYPE html>
<html>
<head></head>
<body>
<?php


$idPregunta = $_POST["idPregunta"];
$pregunta = $_POST["pregunta"];
$respuesta = $_POST["respuesta"];
include ("mysql.php");

$insertar="UPDATE preguntas SET pregunta='$pregunta',respuesta='$respuesta' where idPregunta='$idPregunta'";
mysql_query($insertar,$link)or die (mysql_error());
echo "Guardado con EXITO!\n";
echo "<a href=\"boton.php\">Volver</a>";



?>
</body>
</html>

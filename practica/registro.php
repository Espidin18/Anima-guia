<!DOCTYPE html>
<html>
<head></head>
<body>
<?php



$pregunta = $_POST["pregunta"];
$respuesta = $_POST["respuesta"];

include ("mysql.php");

$insertar="INSERT INTO preguntas SET pregunta='$pregunta',respuesta='$respuesta'";
mysql_query($insertar,$link)or die (mysql_error());




echo "Guardado con EXITO!\n";
echo "<a href=\"boton.php\">Volver</a>";

?>
</body>
</html>

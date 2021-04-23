<!DOCTYPE html>
<html>
<head></head>
<body>
<?php

	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		include ("mysql.php");
		$query="SELECT * FROM preguntas where idPregunta ='".$idPregunta."'";
		$result = mysql_query($query);


			if ($row = mysql_fetch_array($result))
			{
  				 echo "<p>Pregunta: ".$row['pregunta']."</p><p>respuesta: ".$row['respuesta']."</p>
       			}
	 }echo "<a href=\"boton.php\">Volver</a>";
?>

</body>
</html>

<!DOCTYPE html>
<html>
<head></head>
<body>
<?php

	if(isset($_GET['idPregunta']))
	{
		$id=$_GET['idPregunta'];
		include ("mysql.php");
		$query="Delete FROM preguntas where idPregunta='".$idPregunta."'";
		mysql_query($query,$link)or die (mysql_error());
}

		header("location:boton.php");


?>
</body>
</html>

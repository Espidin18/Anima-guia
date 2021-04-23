<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
	if(isset($_GET['idPregunta']))
	{
		$id=$_GET['idPregunta'];
		include ("mysql.php");
		$query="SELECT * FROM preguntas where idPregunta='".$idPregunta."'";
		$result = mysql_query($query);


			if ($row = mysql_fetch_array($result))
			{
?>				<form action="update.php" method="post">
  				<p>pregunta <input type="text" name="pregunta" value="<?php echo $row['pregunta'];?>"required/></p>
				<p>respuesta<input type="text" name="respuesta" value="<?php echo $row['respuesta'];?>"required/></p>
				<input type="hidden" name="id" value="<?php echo $row['idPregunta'];?>"/>
				<input type="submit" value="guardar"/>
				<?php echo "<a href=\"boton.php\">Volver</a>";?>
	    </form>
<?php
       			}
	 }

?>


</body>
</html>

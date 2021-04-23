<?php

include ("inicio_sesion.php");

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

  <?php
  	include ("mysql.php");

 	 $query ="SELECT d.idPregunta, d.pregunta, d.respuesta" .
         "FROM contactos d";
 	 $result = mysql_query($query);



	if ($row = mysql_fetch_array($result))
	{
  		 echo "<table border = '1'> \n";
  		 echo "<tr><td>idPregunta</td><td>Pregunta</td><td>Respuesta</td><td>Celular</td><td>codigo</td><td>opciones</td></tr> \n";
     	  do
	   {
              echo "<tr> <td>".$row["idPregunta"]."</td><td>".$row["respuesta"]."</td> <td>".$row["pregunta"]."</td> <td>   <a href=\"ver.php?id=".$row["id"]."\">Ver</a>      <a href=\"editar.php?id=".$row["id"]."\">Editar</a> <a href=\"borrar.php?id=".$row["id"]."\">Borrar</a></td></tr> \n";
	   }

	   while($row = mysql_fetch_array($result));
           echo "</table> \n";
       }
       else
	{
         echo "� No se ha encontrado ning�n registro !";
        }

	mysql_free_result($result);
	mysql_close($link);
  ?>
		<form action="datos.php" method="post">
		<input type="submit" value="Nuevo"/>

           	</form>


<p>Puede cerrar su sesion aqui: <a href="cerrar_sesion.php?">Cerrar sesion</a></p>
</body>
</html>

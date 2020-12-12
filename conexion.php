<?php

	$con=mysqli_connect('localhost','root','','guinda') or die (mysql_error($mysqli));

	insertar($con);
	function insertar($con){
		$correo = $_POST['correo'];
		$telefonom = $_POST['telefonom'];
		$nombreusu = $_POST['nombreusu'];
		$nombre_s = $_POST['nombre_s'];
		$apellidos = $_POST['apellidos'];
		$contrasena = $_POST['contrasena'];

		$consulta = "INSERT INTO usuario_perfil(correo, telefonom, nombreusu, nombre_s, apellidos, contrasena) VALUES 
		('$correo','$telefonom','$nombreusu','$nombre_s','$apellidos','$contrasena')";
		mysqli_query($con, $consulta);
		mysqli_close($con);
		header("Location: index.html");

	}
?>

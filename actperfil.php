<?php 
	include 'session.php';
			$descripcion = $_POST['descripcion'];
			$update = "UPDATE usuario_perfil SET descripcion='$descripcion' WHERE correo='$login_session'";
			$query = $con->query($update);
			header("Location: perfil.php");
			$con = null;
?>
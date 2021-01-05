<?php
session_start(); // Iniciando sesion
$error=''; // Variable para almacenar el mensaje de error

	if (isset($_POST['submite'])) {
		if (empty($_POST['correo']) || empty($_POST['contrasena'])) {
		$error = "Correo o Contrasena incorrecta";
		}
			else
			{
			$username=$_POST['correo'];
			$password=$_POST['contrasena'];
			// Estableciendo la conexion a la base de datos
			include("conexion.php");//Contiene de conexion a la base de datos
 
			// Para proteger de Inyecciones SQL 
			$username    = mysqli_real_escape_string($con,(strip_tags($correo,ENT_QUOTES)));
			$password =  sha1($contrasena);
			$sql = "SELECT correo, contrasena FROM usuario_perfil WHERE correo = '$correo' and password= '$contrasena';";
			$query=mysqli_query($con,$mysqli);
			$counter=mysqli_num_rows($query);
				if ($counter==1){
						$_SESSION['login_user_sys']=$nombreusu; // Iniciando la sesion
						header("location: index.html"); // Redireccionando a la pagina profile.php
	
	
					} else {
					$error = "El correo electrónico o la contraseña es inválida.";	
					}
			}
	}

?>
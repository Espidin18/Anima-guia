<?php

include 'conexion.php';

try {

 $correo=htmlentities(addslashes($_POST['correo']));
 $password=htmlentities(addslashes($_POST['contrasena']));


 $counter = 0;


 $sql = "SELECT * FROM usuario_perfil WHERE correo = :correo";


 $resultado=$con->prepare($sql);


 $resultado->execute(array(":correo"=>$correo));

 $registro=$resultado->fetch(PDO::FETCH_ASSOC);

  if (!$registro) {
       header("Location: registro.html");
    }
	else {
	if($password == $registro['contrasena']) {

		 $counter++;

		 $tipo = $registro['id'];
		 $nombre_s = $registro['nombre_s'];
		 $apellidos = $registro['apellidos'];
		 }
	if ($counter>0) {
	session_start();
	echo "el usuario existe";
	$_SESSION['correo']=$correo;
	$_SESSION['contrasena']=$password;
	$_SESSION['tipo']=$tipo;
	$_SESSION['nombre_s']=$nombre_s;
	$_SESSION['apellidos']=$apellidos;
	// Iniciando la sesion
	header("index.html");  // Redireccionando a la pagina de inicio (que aun no la acaba Azulito)
	}
	else {
  header("Location: perfil.html");
	}


 $con = null;
 }
}
catch(Exception $e) {
   die($e->getMessage());
}
?>

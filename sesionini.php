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
	if(password_verify($password, $registro['contrasena'])) {
   
		 $counter++;
		 }
	if ($counter>0) {
	
	$_SESSION['login_user_sys']=$nombreusu; // Iniciando la sesion
	header("index.html");  // Redireccionando a la pagina de inicio (que aun no la acaba Azulito)	
	} 
	else {
  header("Location: index.html");
	}

	
 $con = null;
 }
} 
catch(Exception $e) {
   die($e->getMessage());
}
?>
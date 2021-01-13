<?php

require 'cifrado.php';

try {
 
 $correo=htmlentities(addslashes($_POST['correo']));
 $password=htmlentities(addslashes($_POST['contrasena']));

 
 $counter = 0;

 
 $sql = "SELECT * FROM usuario_perfil WHERE correo = :correo";


 $resultado=$con->prepare($sql);


 $resultado->execute(array(":correo"=>$correo));


 while($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
 
  if(password_verify($password, $registro['contrasena'])) {
   
   $counter++;
  }
 }

 if ($counter>0) {
	echo "el usuario existe";
	$_SESSION['login_user_sys']=$nombreusu; // Iniciando la sesion
	header("location: perfil.html"); // Redireccionando a la pagina de inicio (que aun no la acaba Azulito)
	} 
	else {
  header("location: sesion.html");
 }


 $con = null;
} catch(Exception $e) {
   die($e->getMessage());
}
?>
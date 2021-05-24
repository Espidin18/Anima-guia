

<?php
require 'conexion.php';

//aqui puse la contra Romo.
$password = $_POST['contrasena'];

//Acuerdate de que usamos "HASH"
$perfil = 2;
/*
Como se que no pusiste atencion te explico. El Cost es la fuerza del Cifrado o eso recuerdo de lo que te explique la otra vez
*/

if ($con == true) {


 $insert = $con->prepare("INSERT INTO usuario_perfil (correo, telefonom, nombreusu, nombre_s, apellidos, contrasena, id) VALUES (:correo, :telefonom, :nombreusu, :nombre_s, :apellidos, :contrasena, :id)");

 $insert->bindParam(':correo', $_POST['correo']);
 $insert->bindParam(':telefonom', $_POST['telefonom']);
 $insert->bindParam(':nombreusu', $_POST['nombreusu']);
 $insert->bindParam(':nombre_s', $_POST['nombre_s']);
 $insert->bindParam(':apellidos', $_POST['apellidos']);
 $insert->bindParam(':contrasena', $password);
 $insert->bindParam(':id', $perfil);
 //si no la regue al chile y todo esta correcto ejecuto lo anterior
 $insert->execute();



 $con = null;

 header("Location: index.html");

}
 else {

 header("Location: index.html");

 }
	?>

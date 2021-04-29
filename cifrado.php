
<?php
define('DB_HOST', 'localhost');//DB_HOST:  generalmente suele ser "127.0.0.1"
define('DB_USER', 'root');//Usuario de tu base de datos
define('DB_PASS', '');//Contraseña del usuario de la base de datos
define('DB_NAME', 'guinda');//Nombre de la base de datos

# conectare la base de datos
$con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($con == true) {

$perfil = 2;

 $insert = $con->prepare("INSERT INTO usuario_perfil (correo, telefonom, nombreusu, nombre_s, apellidos, contrasena, id) VALUES (:correo, :telefonom, :nombreusu, :nombre_s, :apellidos, :contrasena, :perfil)");

 $insert->bindParam(':correo', $_POST['correo']);
 $insert->bindParam(':telefonom', $_POST['telefonom']);
 $insert->bindParam(':nombreusu', $_POST['nombreusu']);
 $insert->bindParam(':nombre_s', $_POST['nombre_s']);
 $insert->bindParam(':apellidos', $_POST['apellidos']);
 $insert->bindParam(':contrasena', $_POST['contrasena']);
 $insert->bindParam(':perfil', $perfil);
 //si no la regue al chile y todo esta correcto ejecuto lo anterior
 $insert->execute();



 $con = null;

 header("Location: index.html");

}
 else {

 header("Location: index.html");

 }
	?>

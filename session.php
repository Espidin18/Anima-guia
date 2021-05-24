<?php

/*Datos de conexion a la base de datos*/
define('DB_HOST', 'localhost');//DB_HOST:  generalmente suele ser "127.0.0.1"
define('DB_USER', 'root');//Usuario de tu base de datos
define('DB_PASS', '');//Contraseña del usuario de la base de datos
define('DB_NAME', 'guinda');//Nombre de la base de datos

# conectare la base de datos
$con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$con){
    die("imposible conectarse: ".mysqli_error($con));
}
if (@mysqli_connect_errno()) {
    die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}
session_start();// Iniciando Sesion
// Guardando la sesion
$user_check=$_SESSION['login_user_sys'];
// SQL Query para completar la informacion del usuario
$ses_sql=mysqli_query($con, "select * from `usuario_perfil`where correo='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['correo'];
$login_desc = $row['descripcion'];
$login_user = $row['nombreusu'];
if(!isset($login_session)){
mysqli_close($con); // Cerrando la conexion
header('Location: index.html'); // Redirecciona a la pagina de inicio
}
?>

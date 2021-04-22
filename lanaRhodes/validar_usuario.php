<?php
include 'conexion.php';
$usu_usuario=$_POST['correo'];
$usu_password=$_POST['contrasena'];

//$usu_usuario="aroncal@gmail.com";
//$usu_password="12345678";

$sentencia=$conexion->prepare("SELECT * FROM usuario_perfil WHERE correo=? AND contrasena=?");
$sentencia->bind_param('ss',$usu_usuario,$usu_password);
$sentencia->execute();

$resultado = $sentencia->get_result();
if ($fila = $resultado->fetch_assoc()) {
         echo json_encode($fila,JSON_UNESCAPED_UNICODE);     
}
$sentencia->close();
$conexion->close();
?>
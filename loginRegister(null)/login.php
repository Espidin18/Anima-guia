<?php
require "DataBase.php";
$db=new DataBase();
if (isset($_POST['nombreusu']) && isset($_POST['contrasena'])){
    if($db->dbConnect()){
        if($db->logIn("usuario_perfil",$_POST['nombreusu'], $_POST['contrasena'])){
        echo "LOgin satisfactorio";
        }else echo "usuario o contraseña error";
    }else echo "error en conexión de base";
}else echo "todos campos obligatorios"

?>
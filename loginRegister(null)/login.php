<?php
require "DataBase.php";
$db=new DataBase();
if (isset($_POST['nombreusu']) && isset($_POST['contrasena'])){
    if($db->dbConnect()){
        if($db->logIn("usuario_perfil",$_POST['nombreusu'], $_POST['contrasena'])){
        echo "LOgin satisfactorio";
        }else echo "usuario o contrase�a error";
    }else echo "error en conexi�n de base";
}else echo "todos campos obligatorios"

?>
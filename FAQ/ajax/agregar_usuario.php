<?php require_once('../Connections/conex.php')?>

<?php
if (!isset($_SESSION)) {
  session_start();
}

$nombre = mb_strtoupper($_POST['nombre']);
$usuario = mb_strtolower($_POST['usuario']);

$query = sprintf("SELECT usuario FROM login  WHERE login.usuario='".$usuario."'");
mysqli_select_db($conex, $database_conex);
$Login=mysqli_query($conex,$query) or die(mysqli_error());
$loginFoundUser = mysqli_num_rows($Login);

if($loginFoundUser==1){

    echo 3;
}

else {if ((isset($_POST["agregar"])) && ($_POST["agregar"] == "1")) {
  $insertSQL = sprintf("INSERT INTO login  (nombre,usuario) 
  VALUES ('$nombre', '$usuario')");
  $Result1 = mysqli_query($conex, $insertSQL) or die(mysqli_error());

if($Result1==true){ 
  echo 1;
} else { 
  echo 0;
  }

}
}
?>
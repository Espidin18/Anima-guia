
<?php
    include 'conexion.php';
try{
    session_start(); // Iniciando sesion
    $error=''; // Variable para almacenar el mensaje de error
    if (isset($_POST['submite'])) {
        if (empty($_POST['correo']) || empty($_POST['contrasena'])) {
        $error = "Username or Password is invalid";
        }else{
        // Define $username y $password

        // Estableciendo la conexion a la base de datos
    //Contiene de conexion a la base de datos

        // Para proteger de Inyecciones SQL
        $username=htmlentities(addslashes($_POST['correo']));
        $password=htmlentities(addslashes($_POST['contrasena']));


        $counter = 0;
        $sql = "SELECT * FROM usuario_perfil WHERE correo = :correo";


        $resultado=$con->prepare($sql);


        $resultado->execute(array(":correo"=>$username));

        $registro=$resultado->fetch(PDO::FETCH_ASSOC);

            if (!$registro) {
                 header("Location: registro.html");
              }else {
              	if($password == $registro['contrasena']) {

              		 $counter++;
      		         }
      	        if ($counter>0) {
                        $_SESSION['login_user_sys']=$username; // Iniciando la sesion
                        $_SESSION['tipo']=$registro['id'];
                            header("location: FAQusuario.php"); // Redireccionando a la pagina de inicio (que aun no la acaba Azulito)
      	            }else {
                    header("Location: perfil.html");
                      	}


                }
            }
        }
}
catch(Exception $e) {
   die($e->getMessage());
}
?>

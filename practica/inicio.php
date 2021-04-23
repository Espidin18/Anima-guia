<!DOCTYPE html>
<html>

<head></head>
	<body>
<?php
		if (isset($_POST['user']) && isset($_POST['pass']))
                  {
    			if (($_POST['user']=="c100")&&($_POST['pass']=="udg") )
		            {
        			 session_start();
       				 $_SESSION['user']="c100";
       				 header("location:boton.php");
       			    }
   			 else
       			          header("location:inicio.php");
 
    			    }
		else
?>

            <form action="inicio.php" method="post">
		Usuario:<input type="text" name="user"/>
		Password:<input type="text" name="pass">
		<input type="submit" value="acceder"/>
	    </form>
		<?php
?>    
	</body>
</html>
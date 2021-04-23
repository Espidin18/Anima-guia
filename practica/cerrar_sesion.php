<html>

<head></head>
	<body>

<?php
include ("inicio_sesion.php");
session_unset();
session_destroy();
?>
<p>Sesion cerrada</p>
<p><a href="inicio.php">Volver al inicio</a></p>
</body>
</html>
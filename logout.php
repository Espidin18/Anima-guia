<?php
session_start();
if(session_destroy()) // Destruye todas las sesiones
{
header("Location: index.html"); // Redireccionando a la pagina index.php
}
?>

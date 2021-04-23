<?php
$link = @mysql_connect("localhost", "root","")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("guinda", $link)
      or die ("Error al conectar a la base de datos.");

?>

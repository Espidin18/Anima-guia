<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar Preguntas</title>

<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:50%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body>
<div class="main-wrapper">
<h1>Eliminar Preguntas</h1>
<br><br>

<?php
	include("function.php");
?>
<table border="1" width="50%">
	<tr>
		<th width="41%">Pregunta</th>
		<th width="50%">Respuesta</th>
		<th width="9%">Opcion</th>
	</tr>
<?php 
	$sql = "select * from preguntas";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->pregunta;?></td>
		<td><?php echo $row->respuesta;?></td>
		<td>
  <a href="borrar.php?id=<?php echo $row->id;?>">putoas </a> 
        </td>
	</tr>
	<?php } ?>
</table>
</div>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar reportes</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
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
	width:100%;
	height:100%;
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
input, textarea {
            width: 500px;
            border: none;
            border-radius: 20px;
            outline: none;
            padding: 10px;
            font-family: 'Sniglet', cursive;
            font-size: 1em;
            color: #676767;
            transition: border 0.5s;
            -webkit-transition: border 0.5s;
            -moz-transition: border 0.5s;
            -o-transition: border 0.5s;
            border: solid 3px #98d4f3;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
input[type="submit"] {
            background-color: #F90;
            color: white;
            height: 50px;
            cursor: pointer;
            margin-top: 30px;
            font-size: 1.29em;
            font-family: 'Sniglet', cursive;
            -webkit-transition: background-color 0.5s;
            -moz-transition: background-color 0.5s;
            -o-transition: background-color 0.5s;
            transition: background-color 0.5s;
}
label {
            font-size: 1.5em;
            margin-top: 20px;
            padding-left: 20px;
        }
</style>
</head>

<body>
<div class="main-wrapper">
<h1>Editar </h1>
<br><br>
<?php
include("function.php");
$id = $_GET['id'];
select_id('reportes','idReporte',$id);
?>
<form action="" method="post">
	<input type="text" value="<?php echo $row->reporte;?>" name="reporte">
	<input type="submit" name="submit">
</form>

<?php

	if(isset($_POST['submit'])){
		$field = array("reporte"=>$_POST['reporte']);
		$tbl = "reportes";
		edit($tbl,$field,'idReporte',$id);
		header("location:../gerenter.php");
	}
?>
</div>
</body>
</html>

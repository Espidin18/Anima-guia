<?php require_once('../Connections/conex.php'); ?>
<?php 
$id = $_GET['id'];
$carpetaAdjunta="../dist/img/usuario/";
// Contar envían por el plugin
$Imagenes =count(isset($_FILES['imagenes']['name'])?$_FILES['imagenes']['name']:0);
$infoImagenesSubidas = array();
for($i = 0; $i < $Imagenes; $i++) {
	// El nombre y nombre temporal del archivo que vamos para adjuntar
	$nombreArchivo=isset($_FILES['imagenes']['name'][$i])?$_FILES['imagenes']['name'][$i]:null;
	$nombreTemporal=isset($_FILES['imagenes']['tmp_name'][$i])?$_FILES['imagenes']['tmp_name'][$i]:null;
	$rutaArchivo=$carpetaAdjunta.$nombreArchivo;
	move_uploaded_file($nombreTemporal,$rutaArchivo);
	$infoImagenesSubidas[$i]=array("caption"=>"$nombreArchivo","height"=>"120px","key"=>$nombreArchivo);
	$ImagenesSubidas[$i]="<img  height='120px'  src='mensaje/$rutaArchivo' class='file-preview-image'>";
	$insertSQL = ("UPDATE login SET foto='".$nombreArchivo."' WHERE id_usuario=$id.");
	$Result1 = mysqli_query($conex, $insertSQL) or die(mysqli_error($conex));
	}
$arr = array("file_id"=>0,"overwriteInitial"=>true,"initialPreviewConfig"=>$infoImagenesSubidas,
			 "initialPreview"=>$ImagenesSubidas);
echo json_encode($arr);
?>
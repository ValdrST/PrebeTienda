<?php 
include('conexion.php');
session_start();
if(isset($_SESSION['sesion_iniciada'])){
	$nombre=$_POST['nombre'];
	$precio=(float)$_POST['precio'];
	$descripcion=$_POST['descripcion'];
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	if (in_array($_FILES['foto']['type'], $permitidos) && $precio > 0.0){
		$tmp_image=$_FILES['foto']['tmp_name'];
		$tipo = $_FILES['foto']['type'];
		$tmp_image=addslashes(fread(fopen($tmp_image, "rb"), filesize($tmp_image)));
		$instruccion = "INSERT INTO productos (nombre, descripcion, precio, tipo, imagen) VALUES('".$nombre."', '".$descripcion."', '".$precio."', '".$tipo."', '".$tmp_image."')";
		 mysqli_query($conectar, $instruccion);
		header("location: venta.php");
	}
}
mysqli_close($conectar);
?>
<?php 
include("conexion.php");
$id=$_GET['id_producto'];
$sql="SELECT imagen, tipo FROM productos WHERE id_producto=$id";
$catousse= mysqli_query($conectar, $sql);
$datos = mysqli_fetch_array($catousse);
$imagen = $datos[0];
$mime = $datos[1];
header("Content-Type: $mime");
echo $imagen;
 ?>
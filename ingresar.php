<?php 
	include('conexion.php');
	session_start();
	if(isset($_POST['ingresar'])){
		$nombre = $_POST['usuario'];
		$password = sha1($_POST['password']);
		$consulta = "SELECT * FROM usuarios WHERE usuario = \"". $nombre ."\" AND password = \"".$password."\"";
		$resultado = mysqli_query($conectar , $consulta);
		if (mysqli_num_rows($resultado) == 1) {
			$usuario = mysqli_fetch_array($resultado);
			$_SESSION['sesion_iniciada'] = $nombre;
			header("location: index.php");
		}else{
			header("location: sesion.php");
			echo "usuario no encontrado";
		}
	}
 ?>
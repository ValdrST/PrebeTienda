<?php 
	 include('conexion.php');
	 session_start();
	 if(isset($_SESSION['sesion_iniciada'])){
	 	echo "la sesion ya esta iniciada";
	 }else{
	 	$nombre=$_POST['usuario'];
	 	$password=sha1($_POST['password2']);
	 	$consulta = "SELECT * FROM usuarios WHERE usuario = \"". $nombre ."\"";
		if($resultado = mysqli_query($conectar,$consulta)){
			if(mysqli_num_rows($resultado) == 0){
				$registro = "INSERT INTO usuarios (usuario, password) VALUES('".$nombre."', '".$password."')";
				echo $registro;
				if(mysqli_query($conectar,$registro)){
					echo "exito";
					header("location: index.php");
				}
			}else{
				echo "usuario ya existente";
				header("location: registro.php");
		}
	}
}
mysqli_close($conectar);
 ?>
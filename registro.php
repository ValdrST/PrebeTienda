<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Registro</title>
	<div>
		<ul id="nav">
			<li><a href="index.php">Inicio</a></li>
		<?php
			session_start();
			if(!isset($_SESSION['sesion_iniciada'])){
				echo "<li><a href=\"sesion.php\">iniciar Sesion</a></li>";
				echo "<li><a href=\"registro.php\">Registrar Usuario</a></li>";
				echo "<li><a href=\"tienda.php\">¡Comprar!</a></li>";
			}else{
				echo "<li><a href=\"#\">".$_SESSION['sesion_iniciada']."</a><li>";
				echo "<li><a href=\"tienda.php\">¡Comprar!</a></li>";
				echo "<li><a href=\"venta.php\">¡Vender!</a></li>";
				echo "<li><a href=\"cerrar.php \">logout</a></li>";
			}
		?>
		</ul>
	</div>
</head>
<body>
	<div id="registro">
		<form action="registrar.php" method="POST" name="fRegistro">
			<h1 id="titulo">REGISTRO</h1><br>
			<p>NOMBRE DE USUARIO:</p>
			<input type="text" name="usuario" class="textos">
			<br>
			<p>CONTRASEÑA:</p>
			<input type="password" name="password1" class="textos">
			<br>
			<p>REPETIR CONTRASEÑA:</p>
			<input type="password" name="password2" class="textos">
			<br><br>
			<input type="submit" value="enviar" name="registro" onClick="comprobarPassword()" class="boton">
		</form>
	</div>
	<video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="0"/>
  <source src="css/79.mp4" type="video/mp4" />
</video/></video/>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>IniciarSesion</title>
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
	
	<div id="inicio-sesion">
		<form action="ingresar.php" method="POST">
			<h1 id="titulo">INCIAR SESION</h1>
			<br>
			<p>usuario:</p>
			<input type="text" name="usuario" class="textos">
			<br>
			<p>contraseña:</p>
			<input type="password" name="password" class="textos">
			<br><br>
			<input type="submit" value="inciar Sesion" name="ingresar" class="boton">
		</form>
	</div>
	<video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="0"/>
  <source src="css/IMG_1751.mp4" type="video/mp4" />
</video/></video/>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Venta</title>
	<link rel="stylesheet" href="css/style.css">
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
	<div id="vender">
		
		<h1>Vender Articulo</h1>
		<form enctype="multipart/form-data" action="registroVenta.php" method="POST">
			<p>NOMBRE ARTICULO:</p>
			<input type="text" name="nombre" class="textos">
			<br>
			<p>PRECIO:</p>
			<input type="text" name="precio" class="textos">
			<br>
			<p>DESCRIPCION:</p>
			<input type="text" name="descripcion" class="textos">
			<p>IMAGEN:</p>
			<input name="foto" type="file" />
			<br><br>
			<input type="submit" name="vender" class="boton">
		</form>
	</div>
	<video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="0"/>
  <source src="css/shopping-mall-time-lapse.mp4" type="video/mp4" />
</video/></video/>
</body>
</html>
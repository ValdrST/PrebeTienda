<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Prebe Tienda</title>
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
<body id="index">
	<video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="0"/>
  <source src="css/shoppingmall.mp4" type="video/mp4" />
</video/></video/>
</body>
</html>
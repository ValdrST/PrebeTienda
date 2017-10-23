<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Compras</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
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
	<div id="tabla-productos">
		<table>
			<tr>
				<td><strong>nombre</strong></td>
				<td><strong>precio</strong></td>
				<td><strong>descripcion</strong></td>
				<td><strong>imagen</strong></td>
			</tr>
			<?php 
			include("conexion.php");
			$sql="SELECT nombre, precio, descripcion, id_producto FROM productos";
			$consulta=mysqli_query($conectar,$sql);
			echo "<form action=\"addCarrito.php\" method=\"POST\">";
			while($row = mysqli_fetch_row($consulta)){
				echo "<tr>";
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td><img src=\"getimg.php?id_producto=$row[3]\" alt=\"imagen\"></td>";
				echo "<td><input type=\"submit\" name=\"$row[3]\" value=\"Agregar al Carrito\" class=\"boton\"></td>";
				echo "<tr/>";
			}
			echo "</form>";
			?>
		</table>
	</div>
	<video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="0"/>
	<source src="css/stock-footage-escalator-k-shopping-mall-crowd-of-people-buy-shop-center-centre-last-minute-sale-sales-purchases-r.mp4" type="video/mp4" />
</video/></video/>
</body>
</html>
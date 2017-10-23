<?php 
session_start();
unset($_SESSION['sesion_iniciada']);
header("location: index.php");
 ?>
<?php 
	
	require("conexion.php");	

	$nombre = $_POST["inombre"];
	$user = $_POST["iuser"];
	$password = $_POST["ipassword"];

	mysql_query("INSERT INTO usuarios VALUES ('','$nombre','$user','$password')");
?>
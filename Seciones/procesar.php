<?php 
	session_start();
	$num1 = $_POST["numero"];
	$num2 = $_POST["numero2"];

	$_SESSION['respuesta'] = $num1 + $num2;
	header("Location:index.php");

?>
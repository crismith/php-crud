<?php 
	session_start();
?>

<!DOCTYPE html>
<!-- las seciones guardan y pueden pasar informacion  -->
<html>
	<head>
		<title>Sessiones</title>
	</head>
	<body>
		<form action="procesar.php" method="POST">
			<input type="text" name="numero" placeholder="ingresa numero 1">
			<br>
			<input type="text" name="numero2" placeholder="ingresa numero 2">
			<br>
			<input type="text" name="resultado"   placeholder="Aca se vera el resultado" value="<?php  
			if (empty($_SESSION['respuesta'])) {

			}else{
				echo $_SESSION['respuesta']; 
			}
			session_destroy();
			?>">
			<br>
			<input type="submit" name="submit" value="enviar">
		</form>
	</body>
</html>	
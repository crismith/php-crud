<?php 

include('conexion.php');

$insert = "INSERT INTO clientes (name,user,password) VALUES ('cristian','cris@gmail.com','123456')";

if (mysqli_query($conectar,$insert)) {
	echo "Se envio correctamente los datos";
}else{
	echo "Error en el envio de datos";
}

mysqli_close($conectar);

?>
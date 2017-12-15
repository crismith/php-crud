<?php
$conectar = new mysqli("localhost", "root", "", "tienda");

if ($conectar->connect_errno) {
    echo "conexion incorrecta";
}else{
	echo "conexion exitosa "."<br>";
}
	
?>
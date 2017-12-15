<?php 

include 'conexion.php';

$select = "SELECT id_cliente,name,user FROM clientes";
$lista = mysqli_query($conectar,$select);

if (mysqli_num_rows($lista)>0) {
	while ($row = mysqli_fetch_assoc($lista)) {
		echo "ID : " .$row['id_cliente']."<br>";
		echo "Nombre :" .$row['name']."<br>";
		echo "Usuario :" .$row['user']."<br><br>";
	}
}else{
	echo "0 registros";
}

?>

<!-- 
// $mysqli = new mysqli("localhost", "mi_usuario", "mi_contraseña", "world");

// /* comprobar la conexión */
// if (mysqli_connect_errno()) {
//     printf("Falló la conexión: %s\n", mysqli_connect_error());
//     exit();
// }
 
// $consulta = "SELECT Name, CountryCode FROM City ORDER by ID DESC LIMIT 50,5";

// if ($resultado = $mysqli->query($consulta)) {

//     /* obtener el array de objetos */
//     while ($obj = $resultado->fetch_object()) {
//         printf ("%s (%s)\n", $obj->Name, $obj->CountryCode);
//     }

//     /* liberar el conjunto de resultados */
//     $resultado->close();
// }

// /* cerrar la conexión */
// $mysqli->close(); -->

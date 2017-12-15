<?php
	// conectarnos con la base de datos
	$conectar = mysql_connect("localhost","root","");
	if ($conectar) {
		// seleccionar la base de datos
		mysql_select_db("registro",$conectar);
	}
?>
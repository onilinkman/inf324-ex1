<?php
	$servername="localhost";
	$database="midb_marban";
	$username="usuario";
	$password="123456";
	//Creando conexion
	$conn=mysqli_connect($servername,$username,$password,$database);
	//verificar Conexion
	if(!$conn){
		die("Conexion fallida: ".mysqli_connect_error());
	}
	echo "<div class='bg-success' style='width:15px;height:15px;'></div>";
?>

<!-- INSERT INTO estudiante (ci,nombre,paterno,materno,genero,fecha_nac,id_departamento,password)
VALUES (?,?,?,?,?,?,?,?); -->
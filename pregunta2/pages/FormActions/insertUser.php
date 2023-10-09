<?php
$ci = $_POST['Ci'];
$nombre = $_POST['Nombre'];
$paterno = $_POST['Paterno'];
$materno = $_POST['Materno'];
$genero = $_POST['Genero'];
$fecha = $_POST['Fecha'];
$departamento = (int) $_POST['Departamento'];
$password = $_POST['Password'];
$arr=[$ci,$nombre,$paterno,$materno,$fecha,$genero,$password,$departamento];
$sql = "INSERT INTO estudiante(ci,nombre,paterno,materno,fecha_nac,genero,password,id_departamento) VALUES (?,?,?,?,date_format(?,'%y-%m-%d'),?,?,?);";
/* $error = error_get_last();

if ($error) {
  echo "Código de error: " . $error['code'] . "\n";
  echo "Mensaje de error: " . $error['message'] . "\n";
  echo "Línea de código: " . $error['line'] . "\n";
} */
$conn->execute_query($sql,$arr);
echo 'Se ingreso correctamente';
?>
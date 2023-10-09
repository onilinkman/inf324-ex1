<?php
// Recoger los valores de $_POST
$ci = $_POST['Ci'];
$password = $_POST['Password'];

// Consulta SQL con parámetros
$sql = "SELECT ci, password, 'estudiante' as rol FROM estudiante WHERE ci = ? UNION SELECT ci, password, 'docente' as rol FROM docente WHERE ci = ?;";

// Preparar la consulta
$stmt = $conn->prepare($sql);

if ($stmt === false) {
	die("Error en la preparación de la consulta: " . $conn->error);
}

// Vincular los parámetros
$stmt->bind_param("ss", $ci,$ci);

// Ejecutar la consulta
if ($stmt->execute() === false) {
	die("Error en la ejecución de la consulta: " . $stmt->error);
}

// Obtener el resultado
$stmt->bind_result($resultCi, $resultPassword, $rol);

// Comprobar si se encontró un registro
if ($stmt->fetch()) {
	// Verificar la contraseña (esto depende de cómo estén almacenadas las contraseñas en tu base de datos)
	if ($password == $resultPassword) {
		// Contraseña válida, puedes hacer algo aquí
		session_start();
		$_SESSION['logueado'] = true;
		$_SESSION['color'] = $_POST['Color'];
		$_SESSION['rol']=$rol;
		header('location: index.php');
		echo "Contraseña válida. Bienvenido.";
	} else {
		// Contraseña incorrecta
		echo "Contraseña incorrecta.";
	}
} else {
	// No se encontró el usuario
	echo "Usuario no encontrado.";
}

// Cerrar la consulta y la conexión
$stmt->close();
?>
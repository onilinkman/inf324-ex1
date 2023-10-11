<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pregunta 7</title>
</head>

<body>
	<div>hola</div>
	<table>
		<thead>
			<tr>
				<th>CI</th>
				<th>Nombre</th>
				<th>Ap. Paterno</th>
				<th>Ap. Materno</th>
				<th>Fecha Nacimiento</th>
				<th>Genero</th>
				<th>Contrasenia</th>
				<th>Estado</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$db = \Config\Database::connect();
			$query = $db->query('SELECT ci,nombre,paterno,materno,fecha_nac,genero,password,estado FROM estudiante;');

			$resultado = $query->getResult();
			foreach ($resultado as $value) {
				echo "<tr>";
				echo "<td>" . $value->ci . "</td>";
				echo "<td>" . $value->nombre . "</td>";
				echo "<td>" . $value->paterno . "</td>";
				echo "<td>" . $value->materno . "</td>";
				echo "<td>" . $value->fecha_nac . "</td>";
				echo "<td>" . $value->genero . "</td>";
				echo "<td>" . $value->password . "</td>";
				echo "<td>";

				// Verificar el estado y mostrar el botón correspondiente
				if ($value->estado == 1) {
					echo "<form method='POST' action='cambiar_estado'>";
					echo "<input type='hidden' name='ci' value='" . $value->ci . "' />";
					echo "<input type='submit' name='accion' value='Dar de Baja' />";
					echo "</form>";
				} else {
					echo "<form method='POST' action='cambiar_estado.php'>";
					echo "<input type='hidden' name='ci' value='" . $value->ci . "' />";
					echo "<input type='submit' name='accion' value='Dar de Alta' />";
					echo "</form>";
				}

				echo "</td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</body>

</html>
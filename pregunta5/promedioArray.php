<table class="table">
	<?php
	$consulta = 'SELECT nombre,promedio FROM promedio_departamento;';
	$datos = $conn->query($consulta);
	if($datos){
		$columnas=$datos->fetch_fields();
		echo "<thead>";
		echo "<tr>";
		$depart=array();
		$promed=array();
		while ($fila=mysqli_fetch_row($datos)) {
			$depart[]=$fila[0];
			$promed[]=$fila[1];
		}
		foreach ($depart as $value) {
			echo "<th>".$value."</th>";
		}

		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
		echo "<tr>";
		foreach ($promed as $value) {
			echo "<td>".$value."</td>";
		}
		echo "</tr>";
		echo "</tbody>";
	}
	?>
</table>
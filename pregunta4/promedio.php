<table class="table">
	<thead>
		<tr>
			<th class="col">La Paz</th>
			<th class="col">Cochabamba</th>
			<th class="col">Tarija</th>
			<th class="col">Oruro</th>
			<th class="col">Beni</th>
			<th class="col">Potosi</th>
			<th class="col">Chuquisaca</th>
			<th class="col">Pando</th>
			<th class="col">Santa Cruz</th>
		</tr>
	</thead>
	<tbody>
		<tr>

			<?php
			$consulta = 'SELECT 
				sum(CASE WHEN id_departamento=1 THEN promedio ELSE 0 END) "La Paz",
				sum(CASE WHEN id_departamento=2 THEN promedio ELSE 0 END) "Cochabamba",
				sum(CASE WHEN id_departamento=3 THEN promedio ELSE 0 END) "Tarija",
				sum(CASE WHEN id_departamento=4 THEN promedio ELSE 0 END) "Oruro",
				sum(CASE WHEN id_departamento=5 THEN promedio ELSE 0 END) "Beni",
				sum(CASE WHEN id_departamento=6 THEN promedio ELSE 0 END) "Potosi",
				sum(CASE WHEN id_departamento=7 THEN promedio ELSE 0 END) "Chuquisaca",
				sum(CASE WHEN id_departamento=8 THEN promedio ELSE 0 END) "Pando",
				sum(CASE WHEN id_departamento=9 THEN promedio ELSE 0 END) "Santa Cruz"
				FROM promedio_departamento;';
			$datos = mysqli_query($conn, $consulta);
			if ($datos) {
				while ($row = mysqli_fetch_row($datos)) {
					foreach ($row as $key => $value) {
						# code...
						echo "<td>".$value."</td>";
					}
				}
			}
			?>
		</tr>
	</tbody>
</table>
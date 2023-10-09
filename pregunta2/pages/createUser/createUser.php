<div class="container">
	<div class="row justify-content-md-center">


		<div class="col-md-auto">

			<p class="text-center fs-2 fw-bold">
				Crear Cuenta
			</p>
			<form action="index.php" method="POST">
				<input style="display:none;" name="pagina" value="crear">
				<div class="form-floating mb-3">
					<input type="text" class="form-control" name="Ci" id="inputci"
						placeholder="Carnet de Identidad (ci)" autocomplete="off">
					<label for="inputci">Carnet de Identidad (ci)</label>
				</div>
				<div class="form-floating mb-3">
					<input type="text" class="form-control" name="Nombre" id="inputNombre" placeholder="Nombre"
						autocomplete="off">
					<label for="inputNombre">Nombre</label>
				</div>
				<div class="form-floating mb-3">
					<input type="text" class="form-control" name="Paterno" id="inputPaterno"
						placeholder="Apellido Paterno" autocomplete="off">
					<label for="inputPaterno">Apellido Paterno</label>
				</div>
				<div class="form-floating mb-3">
					<input type="text" class="form-control" name="Materno" id="inputMaterno"
						placeholder="Apellido Materno" autocomplete="off">
					<label for="inputMaterno">Apellido Materno</label>
				</div>
				<select class="form-select mt-1 mb-3" name="Genero" aria-label="Default select example">

					<option selected>Seleccionar Genero</option>
					<option value="Masculino">Masculino</option>
					<option value="Femenino">Femenino</option>
				</select>
				<div class="form-floating mb-3">
					<input type="date" class="form-control" name="Fecha" id="inputFechaNac"
						placeholder="Fecha de Nacimiento" autocomplete="off">
					<label for="inputFechaNac">Fecha de Nacimiento</label>
				</div>
				<select class="form-select mt-1 mb-3" name="Departamento" aria-label="Default select example">

					<option selected>Seleccione su departamento</option>
					<?php
					$consulta = 'SELECT id_departamento,nombre FROM departamento';
					$datos = mysqli_query($conn, $consulta);
					if ($datos) {
						while ($row = mysqli_fetch_row($datos)) {
							echo "<option value=" . $row[0] . ">" . $row[1] . "</option>";
						}
					}
					?>
				</select>
				<div class="form-floating mb-3">
					<input type="password" class="form-control" name="Password" id="inputPassword"
						placeholder="Contrasenia" autocomplete="off">
					<label for="inputPassword">Contrasenia</label>
				</div>
				<input type="submit" class="btn btn-success"></input>
			</form>

		</div>
	</div>
</div>
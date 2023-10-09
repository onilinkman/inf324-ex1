<div class="container-sm">
	<div class="row justify-content-md-center">
		<div class="col-md-auto">

			<form action="index.php" method="POST">
			<input style="display:none;" name="pagina" value="login">
				<div class="form-floating mb-3">
					<input type="text" class="form-control" name="Ci" id="inputCi"
						placeholder="Carnet de identidad" autocomplete="off">
					<label for="inputCi">Carnet de identidad</label>
				</div>
				<div class="form-floating mb-3">
					<input type="color" class="form-control" name="Color" id="inputNombre" placeholder="Nombre"
						autocomplete="off">
					<label for="inputNombre">Seleccione tu color</label>
				</div>
				<div class="form-floating mb-3">
					<input type="password" class="form-control" name="Password" id="inputPassword"
						placeholder="Contrasenia" autocomplete="off">
					<label for="inputPassword">Contrasenia</label>
				</div>
				<input class="btn btn-success" type="submit" />
			</form>
		</div>

	</div>
</div>
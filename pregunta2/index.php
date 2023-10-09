<!DOCTYPE html>

<html lang="es" data-bs-theme="dark">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<title>Respuesta Pregunta 1</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">

		<?php
		session_start();
		if (!isset($_SESSION['color'])) {
			echo '<div class="container-fluid">';
		} else {
			echo '<div class="container-fluid" style="background: ' . $_SESSION['color'] . ';">';
		}
		?>

		<a class="navbar-brand" href="../index.php">1er Parcial</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="./">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?page=informacion">Informacion</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?page=instituto">Instituto</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?page=kardex">Kardex</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?page=createUser">Registrarse</a>
				</li>
				<?php
				session_start();
				$color = $_SESSION['color'];
				if (!isset($_SESSION['logueado'])) {
					echo '<li class="nav-item">
							<a class="nav-link" href="?page=login">Login</a>
						</li>';
				} else {
					echo '<li class="nav-item">
						<a class="nav-link text-danger" href="?page=logout">Cerrar Sesion</a>
						</li>';
					echo '<li class="nav-item">
						<a class="nav-link disabled" aria-disabled="true">' . $_SESSION["rol"] . '</a>
					</li>';
				}

				?>
				<li class="nav-item">
					<a class="nav-link disabled" aria-disabled="true">Disabled</a>
				</li>
			</ul>
			<button onclick="changeColor()" class="btn btn-primary">Tema</button>
		</div>
		</div>
	</nav>
	<?php
	include("./coneccion.php");
	$page = $_GET['page'];
	/* if (empty($page)) {
										 
									 } */
	if ($_GET) {
		if (file_exists("./pages/" . $page . "/" . $page . ".php"))
			include("./pages/" . $page . "/" . $page . ".php");
		elseif (empty($page)) {
			include("./pages/main/main.html");
		} else {
			echo 'La pagina no existe';
		}
	}
	if ($_POST) {
		switch ($_POST['pagina']) {
			case 'crear':
				include('./pages/FormActions/insertUser.php');
				break;
			case 'login':
				include('./pages/FormActions/startSesion.php');
				break;
			default:
				echo 'La pagina no existe en post';
				break;
		}
		/* if (empty($_POST['crear'])) {
															echo 'La pagina no existe en post';
														} elseif ($_POST['login'] == 'login') {
															echo 'Se inicio sesion correctamente';
														} else {
															include('./pages/FormActions/insertUser.php');
														} */
	}
	?>
	<script src="../js/bootstrap.min.js"></script>
	<script src="./index.js"></script>

</body>

</html>
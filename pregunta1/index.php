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
		<div class="container-fluid">
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
						<a class="nav-link disabled" aria-disabled="true">Disabled</a>
					</li>
				</ul>
				<button onclick="changeColor()" class="btn btn-primary">Tema</button>
			</div>
		</div>
	</nav>
	<?php
	$page = $_GET['page'];
	/* if (empty($page)) {
		   
	   } */
	if (file_exists("./pages/" . $page . "/" . $page . ".php"))
		include("./pages/" . $page . "/" . $page . ".php");
	elseif (empty($page)){
		include("./pages/main/main.html");
	}
	else {
		echo 'La pagina no existe';
	}
	?>
	<script src="../js/bootstrap.min.js"></script>
	<script src="./index.js"></script>

</body>

</html>
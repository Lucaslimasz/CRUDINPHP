<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Document</title>
</head>

<body>

	<nav class="navbar navbar-dark bg-dark">
		<ul class="nav nav-pills">
			<li class="nav-item">
				<a class="nav-link active" href="principal.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="cadastro.php">Cadastro</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Lista.php">Listagem</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout.php">Sair</a>
			</li>
		</ul>
	</nav>

</body>

</html>
<?php

session_start();

if ($_SESSION['logou'] == 1) {
	echo "<center><h1>Bem vindo ao meu App!</h1></center>";
} else
	header('location: login.html');

?>
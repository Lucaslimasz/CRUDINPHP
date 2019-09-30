<?php
session_start();
if ($_SESSION['logou'] == 1) {
	?>
	<html>

	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
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
		<br><br>

		<form action="cad.php" method="post">
			<div class="input-group input-group-sm mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-sm">Digite seu nome</span>
				</div>
				<input type="text" class="form-control" name="nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
			</div>

			<div class="input-group input-group-sm mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-sm">Digite sua matrícula</span>
				</div>
				<input type="number" class="form-control" name="matricula" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
			</div>

			<div class="input-group input-group-sm mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-sm">Digite seu e-mail</span>
				</div>
				<input type="email" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
			</div>

			<center><input type="submit" class="btn btn-outline-primary" value="Cadastrar"></center></input>
			
		</form>
		
		<!--
		<form action="cad.php" method="post">
			Digite seu nome: <input type="text" name="nome"><br>
			Digite sua matricula: <input type="number" name="matricula"><br>
			Digite seu e-mail: <input type="email" name="email">
			<input type="submit" value="Cadastrar">
			<a href='principal.php'>Inicio</a>
		</form>
		-->


	</body>

	</html>
<?php
} else {
	header("location: login.html");
}
?>
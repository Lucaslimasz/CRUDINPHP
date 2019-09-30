<?php

	session_start();
	
	if($_SESSION['logou'] == 1) {
		$nome = $_POST['nome'];
		$matricula = $_POST['matricula'];
		$email = $_POST['email'];
		
		// 1ª etapa - Comunicação com SGBD
		$servidor = mysqli_connect("localhost","root","","projetocliente");
	
		// 2ª etapa - Executar uma consulta
		mysqli_query($servidor, "insert into cadastro (nome,matricula,email) values ('$nome', '$matricula', '$email')");
		
	
		header("location: lista.php");
	}
	else
		header("location: login.html");


?>
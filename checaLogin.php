<?php

	session_start();

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	if(($login == "admin") and ($senha == "admin"))
	{
		$_SESSION['logou'] = 1;
		header("location: principal.php");
	}
	else
	{
		$_SESSION['logou'] = 0;
		header("location: login.html");
	}

?>
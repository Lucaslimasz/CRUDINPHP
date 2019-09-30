<?php

	session_start();
	
	session_destroy();
	$_SESSION['logou'] = 0;
	
	header('location: login.html');

?>
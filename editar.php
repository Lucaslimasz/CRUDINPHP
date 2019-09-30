<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];

$servidor = mysqli_connect("localhost", "root", "", "projetocliente");
mysqli_query($servidor, "update cadastro set nome = '$nome' where id = $id");
mysqli_query($servidor, "update cadastro set email = '$email' where id = $id");
mysqli_query($servidor, "update cadastro set matricula = '$matricula' where id = $id");

header("Location: lista.php ");


?>
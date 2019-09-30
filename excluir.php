<?php

$id = $_GET['id'];

$servidor = mysqli_connect("localhost", "root", "", "projetocliente");




?>

<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>


<?php

mysqli_query($servidor, "delete from cadastro where id= $id");

header("Location: Lista.php");
?>
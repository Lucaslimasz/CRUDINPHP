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
</body>

</html>

<?php

session_start();



if ($_SESSION['logou'] == 1) {

    $servidor = mysqli_connect("localhost", "root", "", "projetocliente");


    $tabela = mysqli_query($servidor, "select * from cadastro");
    while ($linha = mysqli_fetch_array($tabela)) {
        echo "<br>".$linha['nome'] . " | " . $linha['matricula'] . " | " . $linha['email']."&nbsp;&nbsp;";
        echo "<a class='btn btn-danger' href='excluir.php?id=" . $linha['id'] . "'> EXCLUIR </a> <a class='btn btn-primary' href='formEdita.php?id=" . $linha['id'] .
            "&nome=" . $linha['nome'] . "&email=" . $linha['email'] . "&matricula=" . $linha['matricula'] . "'> EDITAR </a><br><hr>";
    }
} else {
    header('Location: login.html');
}

?>
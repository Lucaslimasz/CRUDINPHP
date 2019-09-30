<?php
session_start();

if ($_SESSION['logou'] == 1) {

    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Editar</title>
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
        <br>


        <form action="editar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            Editar o nome: <input type="text" name="nome" value="<?php echo $_GET['nome']; ?>">
            Editar Matrícula: <input type="number" name="matricula" value="<?php echo $_GET['matricula'] ?>">
            Editar e-mail: <input type="text" name="email" value="<?php echo $_GET['email']; ?>" <br>

            &nbsp;<input type="submit" class="btn btn-primary" value="Editar">
            
        </form>
    </body>

    </html>
<?php
} else {
    header("Location: login.html");
}
?>
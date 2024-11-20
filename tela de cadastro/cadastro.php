<?php

if (isset($_POST['submit'])) {
    //print_r($_POST['nome']);
    //print_r($_POST['senha']);

    include_once('../config.php'); //incluir a conexão

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    //Executa uma consulta SQL que insere um novo registro na tabela
    $result = mysqli_query($conexao, "INSERT INTO tb_login(nome, senha)
                                          VALUES('$nome','$senha')");

    header('Location:../login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de rh</title>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="media_cadastro.css">
    <link rel="shortcut icon" href="/imagem/favicon.png" type="image/x-icon">
</head>

<body>

    <main>

        <form action="cadastro.php" method="POST">
            
            <h1>Cadastrar</h1>

            <label for="">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome de cadastro">

            <label for="">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha">

            <input type="submit" name="submit" id="submit" value="Cadastrar">

            <a href="../login.php">voltar</a>
        </form>

        <article>
            <img src="../imagem/logo-rh.jpg" alt="">
        </article>

    </main>
</body>

</html>
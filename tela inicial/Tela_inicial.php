<?php 

    session_start();//sempre que trabalhar com sessões tem que começar assim
    //print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['nome']);//unset destroi os dados
        unset($_SESSION['senha']);
        header('Location:../login.php');
        exit();
    }
    $logado = $_SESSION['nome'];
    
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de rh</title>
    <link rel="stylesheet" href="Tela_inicial.css">
    <link rel="stylesheet" href="media_cadastro.css">
    <link rel="shortcut icon" href="/imagem/favicon.png" type="image/x-icon">
</head>

<body>

    <main>

        <nav>
            <h1>Calculadora e Gestão de RH</h1>

            <div class="funcoes">    
                <a href="../cadastro funcionario/cadastro_funcionario.php">Cadastrar colaborador</a>
                <a href="#">Pesquisar colaborador</a>
                <a href="#">Calculadora</a>
                <a href="../sair.php">sair</a>
            </div>
        </nav>
            

        <article>
            <img src="../imagem/logo-rh.jpg" alt="">
        </article>

    </main>


</body>

</html>
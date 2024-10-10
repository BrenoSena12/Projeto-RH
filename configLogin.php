<?php 

    session_start();

    /*print_r($_REQUEST);*/  //Testar se as informações estavam sendo passadas do configLogin.php

    if(isset($_POST['submit']))
    {
        include_once('config.php'); //incluir a conexão com o banco de dados

        $nome  = $_POST['nome'];
        $senha = $_POST['senha'];

        /*Teste se estava passando os parametros
        print_r('nome  : ' . $nome); 
        print_r('<br>');
        print_r('senha :' . $senha);*/

        $sql = "SELECT * FROM tb_login WHERE nome = '$nome' and senha = '$senha'"; // verificar se os parametros existem no banco de dados

        $result = $conexao -> query($sql); //mandar execultar no banco de dados

        /*print_r($result);mostrar se acho os parametros no banco de dados*/

        if(mysqli_num_rows($result) < 1) // vai verificar se existe algum registro no banco de dados
        {
            unset($_SESSION['nome']);//unset destroi os dados
            unset($_SESSION['senha']);
            header('Location: login.php');
        }else
        {
            $_SESSION['nome'] = $nome;
            $_SESSION['senha'] = $senha;

            header('Location: tela inicial/tela_inicial.php');
        }
    }else{

        header('Location:/cadastro.php');

    }
?>
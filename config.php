<?php

    $dbHost     = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'rh';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /*TESTAR SE DEU CERTO A CONEXAO
    
    if ($conexao->connect_errno) {
        echo "Erro";
    } else {
        echo "Conexão efetuada com sucesso";
    }*/

?>
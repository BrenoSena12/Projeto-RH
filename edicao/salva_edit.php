<?php 

    include_once('../config.php');

    if(isset($_POST['update']))
    {
        $id                 = $_POST['id'];
        $cpf                = $_POST['cpf'];
        $nome               = $_POST['nome'];
        $telefone           = $_POST['telefone'];
        $endereco           = $_POST['endereco'];
        $data_nascimento    = $_POST['data_nascimento'];
        $cargo              = $_POST['cargo'];
        $data_admissao      = $_POST['data_admissao'];
        $salario            = $_POST['salario'];
        $meses_trabalhados  = $_POST['meses_trabalhados'];

        $sqlUpdate = "UPDATE tb_cadastro_funcionarios SET cpf='$cpf', nome='$nome', telefone='$telefone', endereco='$endereco', data_nascimento='$data_nascimento', cargo='$cargo', data_admissao='$data_admissao', salario='$salario', meses_trabalhados='$meses_trabalhados' WHERE id='$id'";
        
        $result = $conexao -> query($sqlUpdate);
    }

    header('Location: ../pesquisa/pesquisa.php');

?>
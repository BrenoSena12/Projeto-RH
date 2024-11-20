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

        // Cálculo do décimo terceiro (13º salário)
        if ($meses_trabalhados > 12) {
            // Se o trabalhador tem mais de 12 meses, calcula o valor completo do décimo terceiro
            $decimo = $salario; // O valor do décimo terceiro será igual ao salário
        } else {
            // Caso contrário, calcula proporcionalmente aos meses trabalhados
            $decimo = ($salario / 12) * $meses_trabalhados;
        }

        // Cálculo das férias com a condição de ser proporcional ou integral
        if ($meses_trabalhados > 12) {
            // Se o trabalhador tem mais de 12 meses, calcula o valor completo de férias
            $ferias = $salario + ($salario / 3);
        } else {
            // Caso contrário, calcula proporcionalmente
            $ferias = ($salario + ($salario / 3)) * ($meses_trabalhados / 12);
        }

        // Cálculo do FGTS
        $fgts   = $salario * 0.08;
        $fgts_total = $fgts * $meses_trabalhados;

        // Atualiza os dados no banco de dados
        $sqlUpdate = "UPDATE tb_cadastro_funcionarios SET cpf='$cpf', nome='$nome', telefone='$telefone', endereco='$endereco', data_nascimento='$data_nascimento', cargo='$cargo', data_admissao='$data_admissao', salario='$salario', meses_trabalhados='$meses_trabalhados', decimo='$decimo', ferias='$ferias', fgts='$fgts', fgts_total='$fgts_total' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    // Redireciona para a página de pesquisa após a atualização
    header('Location: ../pesquisa/pesquisa.php');
?>

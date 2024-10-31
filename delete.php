<?php 
    if(!empty($_GET['id']))
    {

        include_once('config.php'); //incluir a conexão

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM tb_cadastro_funcionarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {

            $sqlDelete = "DELETE FROM tb_cadastro_funcionarios WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
            header('Location:pesquisa/pesquisa.php');
        }
        else
        {
            
        }

    }
?>

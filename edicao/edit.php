<?php 
    if(!empty($_GET['id']))
    {

        include_once('../config.php'); //incluir a conexão

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM tb_cadastro_funcionarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {

            while($user_data = mysqli_fetch_assoc($result))
            {
                $cpf             = $user_data['cpf'];
                $nome            = $user_data['nome'];
                $telefone        = $user_data['telefone'];
                $endereco        = $user_data['endereco'];
                $data_nascimento = $user_data['data_nascimento'];
                $cargo           = $user_data['cargo'];
                $data_admissao   = $user_data['data_admissao'];
                $salario         = $user_data['salario'];
            }

        }
        else
        {
            header('Location:../pesquisa/pesquisa.php');
        }

    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de rh</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <div class="box">
        <form action="salva_edit.php" method="POST">
            <fieldset>
                <legend><b>Cadastro Funcionario</b></legend>
                <br>

                <div class="inputBox">
                    <input type="number" name="cpf" id="cpf" class="inputUser" required value="<?php echo $cpf?>">
                    <label for="cpf" class="labelInput">Cpf</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required value="<?php echo $nome?>">
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required value="<?php echo $telefone?>">
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required value="<?php echo $endereco?>">
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required value="<?php echo $data_nascimento?>">
                    <br><br><br> 
                </div>

                <div class="inputBox">
                    <input type="text" name="cargo" id="cargo" class="inputUser" required value="<?php echo $cargo?>">
                    <label for="cargo" class="labelInput">cargo</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <label for="data_admissao"><b>Data de Admissao:</b></label>
                    <input type="date" name="data_admissao" id="data_admissao" required value="<?php echo $data_admissao?>">
                    <br><br><br> 
                </div>
                
                <div class="inputBox">
                    <input type="number" name="salario" id="salario" class="inputUser" required value="<?php echo $salario?>">
                    <label for="salario" class="labelInput">Salário</label>
                </div>
                <br><br>

                <input type="hidden" name="id" value="<?php echo $id?>">

                <input type="submit" name="update" id="update">

                <div class="link">
                    <a href="../pesquisa/pesquisa.php">Voltar</a>
                </div>
                
            </fieldset>
        </form>
    </div>
</body>
</html>
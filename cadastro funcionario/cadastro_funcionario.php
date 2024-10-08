<?php 

    if(isset($_POST['submit']))
    {
        print_r($_POST['data_admissao']);

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de rh</title>
    <link rel="stylesheet" href="cadastro_funcionario.css">
</head>
<body>
    <div class="box">
        <form action="cadastro_funcionario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro Funcionario</b></legend>
                <br>

                <div class="inputBox">
                    <input type="number" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">Cpf</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                    <br><br><br> 
                </div>

                <div class="inputBox">
                    <input type="text" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">cargo</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <label for="data_admissao"><b>Data de Admissao:</b></label>
                    <input type="date" name="data_admissao" id="data_admissao" required>
                    <br><br><br> 
                </div>
                
                <div class="inputBox">
                    <input type="number" name="salario" id="salario" class="inputUser" required>
                    <label for="salario" class="labelInput">Salário</label>
                </div>
                <br><br>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
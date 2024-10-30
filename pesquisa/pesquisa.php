<?php

session_start();

include_once('../config.php');

$sql = "SELECT * FROM tb_cadastro_funcionarios ORDER BY id ASC";

$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão rh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="pesquisa.css">

    <style>
        .table-bg{
            text-align: center;
        }

    </style>


</head>

<body>


    <div class="m-5" >
        <table class="table table-striped table-bg">

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">data Nascimento</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Data Admissão</th>
                    <th scope="col">Sálario</th>
                    <th scope="col">...</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['cpf']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>".$user_data['data_nascimento']."</td>";
                        echo "<td>".$user_data['cargo']."</td>";
                        echo "<td>".$user_data['data_admissao']."</td>";
                        echo "<td>".$user_data['salario']."</td>";
                        echo "<td>
                            <a class = 'btn btn-sm btn-primary' href='../edicao/edit.php?id=$user_data[id]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'><path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/><path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
                                </svg>
                            </a>
                        </td>";
                        echo "</tr>";
                    }
                
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>
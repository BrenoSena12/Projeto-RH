<?php

session_start();

include_once('../config.php');

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM tb_cadastro_funcionarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or cpf LIKE '%$data%' ORDER BY     id ASC";
} else {
    $sql = "SELECT * FROM tb_cadastro_funcionarios ORDER BY id ASC";
}

$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão rh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sriracha&display=swap');

        * {
            border: 0px;
            padding: 0px;
            margin: 0;
            font-family: 'poppins', sans-serif;
        }

        :root {
            --color1: #BABBB1;
            --color2: #383835;
            --color3: #383835c2;
        }

        h1 {
            color: var(--color3);
            font-size: 0.5in;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 55px;
        }

        :root {
            --color1: #BABBB1;
            --color2: #383835;
            --color3: #383835c2;
        }

        .box-search {
            display: flex;
            justify-content: center;
            gap: .1%;
        }

        .table-bg {
            text-align: center;
        }

        .voltar a {
            text-decoration: none;
            text-align: center;
            margin-left: 48%;
            color: #383835c2;
        }

        .voltar a:hover {
            text-decoration: underline;
            text-align: center;
            margin-left: 48%;
        }

        .table th {
            background-color: #898a86;
            color: white;
        }

       
    </style>
</head>

<body>

    <div class="titulo">
        <h1>Registro de Funcionários</h1>
    </div>

    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-search' viewBox='0 0 16 16'>
                <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0' />
            </svg>
        </button>
    </div>


    <div class="m-5">
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
                    <th scope="col">Meses Trabalhados</th>
                    <th scope="col">...</th>
                </tr>
            </thead>

            <tbody>
                <?php

                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . $user_data['cpf'] . "</td>";
                    echo "<td>" . $user_data['telefone'] . "</td>";
                    echo "<td>" . $user_data['endereco'] . "</td>";
                    echo "<td>" . $user_data['data_nascimento'] . "</td>";
                    echo "<td>" . $user_data['cargo'] . "</td>";
                    echo "<td>" . $user_data['data_admissao'] . "</td>";
                    echo "<td>" . $user_data['salario'] . "</td>";
                    echo "<td>" . $user_data['meses_trabalhados'] . "</td>";
                    echo "<td>
                            <a class = 'btn btn-sm btn-primary' href='../edicao/edit.php?id=$user_data[id]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'><path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/><path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
                                </svg>
                            </a>

                            <a class = 'btn btn-sm btn-danger' href='../delete.php?id=$user_data[id]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'><path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                                </svg>
                            </a>
                        </td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
    <div class="voltar">
        <a href="../tela inicial/tela_inicial.php">Voltar</a>
    </div>

</body>

<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            searchData();
        }
    });

    function searchData() {
        window.location = 'pesquisa.php?search=' + search.value;
    }
</script>

</html>
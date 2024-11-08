<?php

session_start();

include_once('../config.php');

// Se a pesquisa não estiver vazia, filtramos os resultados.
if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM tb_cadastro_funcionarios WHERE nome LIKE '%$data%' OR cpf LIKE '%$data%'";
} else {
    // Se não houver pesquisa, a tabela ficará vazia, ou seja, sem resultados.
    $sql = "SELECT * FROM tb_cadastro_funcionarios WHERE 1=0"; // Não retorna registros.
}

$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão RH</title>
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

        .box-search {
            display: flex;
            justify-content: center;
            gap: 8px;
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

        #pesquisar {
            width: 400px;
        }

    </style>
</head>

<body>

    <div class="titulo">
        <h1>Financeiro Funcionários</h1>
    </div>

    <div class="box-search">
        <!-- Criar um formulário para enviar os dados de pesquisa -->
        <form action="" method="get" class="d-flex">
            <div class="input-group">
                <input type="search" name="search" class="form-control" placeholder="Pesquisar" id="pesquisar" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                <button type="submit" class="btn btn-primary">
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-search' viewBox='0 0 16 16'>
                        <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0' />
                    </svg>
                </button>
            </div>
        </form>
    </div>

    <div class="m-5">
        <?php if (mysqli_num_rows($result) > 0): ?>
            <table class="table table-striped table-bg">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Salário</th>
                        <th scope="col">Meses trabalhados</th>
                        <th scope="col">Décimo</th>
                        <th scope="col">Férias</th>
                        <th scope="col">FGTS</th>
                        <th scope="col">total FGTS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['id'] . "</td>";
                        echo "<td>" . $user_data['nome'] . "</td>";
                        echo "<td>" . $user_data['salario'] . "</td>";
                        echo "<td>" . $user_data['meses_trabalhados'] . "</td>";
                        echo "<td>" . $user_data['decimo'] . "</td>";
                        echo "<td>" . $user_data['ferias'] . "</td>";
                        echo "<td>" . $user_data['fgts'] . "</td>";
                        echo "<td>" . $user_data['fgts_total'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-center">Nenhum registro encontrado.</p>
        <?php endif; ?>
    </div>

    <div class="voltar">
        <a href="../tela inicial/tela_inicial.php">Voltar</a>
    </div>

</body>

</html>

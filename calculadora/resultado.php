<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de rh</title>
    <link rel="stylesheet" href="resultado.css">
    <link rel="shortcut icon" href="imagem/favicon.png" type="image/x-icon">
</head>
<body>

    <main>
        <article>
                <img src="../imagem/logo-rh.jpg" alt="">
        </article>


        <form action="configLogin.php" method="POST">
            <h1>Resultado Pesquisa</h1>
            
            <label for="">Nome:</label>
            <input type="text" name="nome" id="nome" >
            
            <label for="">Salário:</label>
            <input type="number" name="salario" id="salario">

            <label for="">Décimo terceiro:</label>
            <input type="number" name="decimo_terceiro" id="decimo_terceiro">

            <label for="">Férias:</label>
            <input type="number" name="férias" id="férias">

            <label for="">FGTS:</label>
            <input type="number" name="fgts" id="fgts">

            <div class="voltar">
                <a href="../tela inicial/Tela_inicial.php">Voltar</a>
            </div>
        
        </form>
    </main>
    
    
</body>
</html>
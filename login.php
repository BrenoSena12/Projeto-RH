<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de rh</title>
    <link rel="stylesheet" href="tela de login/style.css">
    <link rel="stylesheet" href="tela de login/style.css">
    <link rel="shortcut icon" href="imagem/favicon.png" type="image/x-icon">
</head>
<body>

    <main>
        <article>
                <img src="imagem/logo-rh.jpg" alt="">
        </article>

        <form action="configLogin.php" method="POST">
            <h1>Login</h1>
            
            <label for="">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome de cadastro">
            
            <label for="">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
            
            <input type="submit" name="submit" id="submit" value="Entrar">

            <div class="cadastrar">
                Não possui cadastro ainda?
                <a href="tela de cadastro/cadastro.php">Cadastrar</a>
            </div>
        
        </form>
    </main>
</body>
</html>
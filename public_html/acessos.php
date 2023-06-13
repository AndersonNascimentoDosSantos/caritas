<?php

    include_once('config.php');

    if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $tipo = $_POST['tipo'];

    $result = mysqli_query($conexao, "INSERT INTO usuario(nome, login, senha, tipo) VALUES('$nome', '$login', '$senha', '$tipo')");

    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/acesso.css">
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <title>Acessos Usuários</title>
</head>
<body>
    
  <form action="acessos.php" method="POST">
    <div class="container-login">
    <a href="principal.php">Voltar</a>
        <div class="card-login">
            <h2>Novo Usuário</h2>
                <div class="text-field">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div class="text-field">
                    <label for="login">Login</label>
                    <input type="text" name="login" id="login" required>
                </div>
                <div class="text-field">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" required>
                </div>
                <div class="text-field">
                    <label for="tipo">Nível</label>
                    <input type="text" name="tipo" id="tipo" required>
                </div>
                
                <button type="submit" id="submit" name="submit" class="btn-cad">Cadastrar</button>
        </div>
    </div>
</form>
</body>
</html>
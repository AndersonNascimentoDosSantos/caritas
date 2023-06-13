<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>Cáritas AMSF</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <div class="main-login">
        <div class="left-login">
            <h1>
                Área Missionária Sagrada Família <br> Sistema de Cadastro Cáritas
            </h1>
            <img src="assets/images/caritas.png" class="logo" alt="cáritas">
        </div>
        <form action="principal.php" method="POST">
            <div class="right-login">
                <div class="card-login">
                    <h2>Login</h2>
                        <div class="text-field">
                            <label for="usuario">Usuário</label>
                            <input type="text" name="usuario" id="usuario" placeholder="digite seu login" required>
                        </div>
                        <div class="text-field">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" placeholder="digite sua senha" required>
                        </div>
                        <button type="submit" class="btn-login">Acessar</button>
                        <!-- <input type="submit" class="btn-login"> -->
                </div>
            </div>
        </form>
    </div>
  </body>
</html>

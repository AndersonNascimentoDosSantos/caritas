<?php

include_once('config.php');

session_start(); 
  if(isset($_SESSION['usuario'])==false) {
  $login = $_POST['usuario'];
  $senha = $_POST['senha'];

  $sql = "select * from usuario where login = '".$login."' and senha = '".$senha."'";
  $result = mysqli_query($conexao, $sql);

  $regs = mysqli_num_rows($result);

  if($regs == 0){
      echo ("<SCRIPT LANGUAGE='JavaScript'>
              window.alert('Usuário Não Encontrado !!!')
              window.location.href='index.php';
              </SCRIPT>");
    

  } 

  else{
    $_SESSION['usuario'] =strtolower($login);
  }

}

// while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
//     echo $row["tipo"];
//     // printf("ID: %s  Name: %s", $row["id"], $row["name"]);
// }

?>



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

            <div class="right-login">
                <ul>
                    <a href="cadastro.php"> <li>Cadastramento</li> </a>
                    <a href="#"> <li>Lista de Cadastrados</li> </a>
                    <a href="#"> <li>Relatórios</li> </a>
                    <a href="acessos.php"> <li>Acessos</li> </a>
                    <a href="logout.php">Logout</a>
                </ul>
            </div>    
          </div>
          
  </body>
</html>

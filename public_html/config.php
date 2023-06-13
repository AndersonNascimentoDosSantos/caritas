<?php

$dbHost = 'mysql';
$dbUsername = 'root';
$dbPassowrd = '310192';
$dbName = 'caritas_db';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassowrd, $dbName);

// if($conexao ->connect_errno){
//   echo "Erro";
// }
// else{
//   echo "Conexão efetuado com sucesso!";
// }

?>
<?php

header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

$json = file_get_contents('php://input');
$data = json_decode($json, true);

include "../funcoes/config.php";
include "../funcoes/verificaVazio.php";

// Início do Cadastro Responsável Familiar
if (verificarArrayVazio($_POST)) {
            $retorno['erro'] = true;
            $retorno['msg'] = "Formulário Incompleto.";
            echo json_encode($retorno);
            http_response_code(400);
            exit();
} else {
  // Prepare the query
$sql = "INSERT INTO cadastro (nome, dt_nascimento, idade, sexo, est_civil, telefone, escolaridade, nacionalidade, naturalidade, rg, cpf, profissao, endereco, bairro, cep, email, cad_unico, religiao, status) 
VALUES (
    '{$_POST['nome']}',
    '{$_POST['dt_nascimento']}',
    '{$_POST['idade']}',
    '{$_POST['sexo']}',
    '{$_POST['est_civil']}',
    '{$_POST['telefone']}',
    '{$_POST['escolaridade']}',
    '{$_POST['nacionalidade']}',
    '{$_POST['naturalidade']}',
    '{$_POST['rg']}',
    '{$_POST['cpf']}',
    '{$_POST['profissao']}',
    '{$_POST['endereco']}',
    '{$_POST['bairro']}',
    '{$_POST['cep']}',
    '{$_POST['email']}',
    '{$_POST['cad_unico']}',
    '{$_POST['religiao']}',
    1
)";
// Execute the query
if ($mysqli->query($sql)) {
  echo "Data inserted successfully.";
} else {
  echo "Error: " . $mysqli->error;
}

// Close the connection
$mysqli->close();

}
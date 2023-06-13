<?php

header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Início do Cadastro Responsável Familiar
if (isset($_POST['cad-resp'])) {
  // responsável
  $nome = $_POST['nome'];
  $dt_nascimento = $_POST['dt_nascimento'];
  $idade = $_POST['idade'];
  $sexo = $_POST['sexo'];
  $est_civil = $_POST['est_civil'];
  $telefone = $_POST['telefone'];
  $escolaridade = $_POST['escolaridade'];
  $nacionalidade = $_POST['nacionalidade'];
  $naturalidade = $_POST['naturalidade'];
  $rg = $_POST['rg'];
  $cpf = $_POST['cpf'];
  $profissao = $_POST['profissao'];
  $endereco = $_POST['endereco'];
  $bairro = $_POST['bairro'];
  $cep = $_POST['cep'];
  $email = $_POST['email'];
  $cad_unico = $_POST['cad_unico'];
  $religiao = $_POST['religiao'];
  $id = $_POST['id'];
}
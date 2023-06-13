<?php

include 'config.php';

//dependente
$id_cadastro = $_GET['id_cadastro'];
$nome_dep = $_GET['nome_dep'];
$grau_parente = $_GET['grau_parente'];
$dt_nascimento_dep = $_GET['dt_nascimento_dep'];
$escolaridade_dep = $_GET['escolaridade_dep'];
$atividade_atual = $_GET['atividade_atual'];





$result = mysqli_query($conexao, "INSERT INTO dependente(nome_dep, grau_parente, dt_nascimento_dep, escolaridade_dep, atividade_atual, id_cadastro) VALUES ('$nome_dep', '$grau_parente', '$dt_nascimento_dep', '$escolaridade_dep', '$atividade_atual', '$id_cadastro')");



$result = mysqli_query($conexao, "SELECT * FROM cadastro a, dependente b where a.id = b.id_cadastro and a.id = '".$id_cadastro."'");

?>

<table>
    <tr>
        <td>Nome</td>
    </tr>
<?php
while ($row = $result->fetch_assoc()) {
    ?> <tr> <td> <?php
    echo $row["nome_dep"];
    ?> </td> </tr> <?php
}
?>
</table>
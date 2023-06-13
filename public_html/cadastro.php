<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript">



// function clicar() {
//     if(document.getElementById("grupo_familiar").style.display == 'none'){
//         document.getElementById("grupo_familiar").style.display='block';
//     } else{
//         document.getElementById("grupo_familiar").style.display='none';
//     }
// }

function cadDep(){

    alert($('#id').val());

    $('#lista').load('cadDep.php?nome_dep='+encodeURI($('#nome_dep').val())+'&grau_parente='+encodeURI($('#grau_parente').val())+'&dt_nascimento_dep='+encodeURI($('#dt_nascimento_dep').val())+'&escolaridade_dep='+encodeURI($('#escolaridade_dep').val())+'&atividade_atual='+encodeURI($('#atividade_atual').val())+'&id_cadastro='+$('#id').val());



}

// $("#btn_grupo").click(function(e){
// 		    alert('ok');
// });

</script>


<?php

include_once 'config.php';



 $result = mysqli_query($conexao, "INSERT INTO cadastro(status) VALUES('0')");
 
 $result = mysqli_query($conexao, "SELECT MAX(id) ultimo from cadastro");

 while ($row = $result->fetch_assoc()) {
    $id = $row['ultimo'];

}


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



    // moradia
    $casa = $_POST['casa'];
    $construcao = $_POST['construcao'];
    $tempo = $_POST['tempo'];
    $agua = $_POST['agua'];
    $energia = $_POST['energia'];
    $saneamento = $_POST['saneamento'];
    $outra_casa = $_POST['outra_casa'];
    $frequencia = $_POST['casa'];

    //economico
    $situacao = $_POST['situacao'];
    $prog_gov = $_POST['prog_gov'];
    $valor = $_POST['valor'];
    $servico = $_POST['servico'];
    $grupo = $_POST['grupo'];
    $renda = $_POST['renda'];


    
    // insert do cadastro responsável


   
    $sql = "UPDATE  cadastro SET nome = '".$nome."', dt_nascimento = '".$dt_nascimento."', idade = '".$idade."', sexo = '".$sexo."', est_civil = '".$est_civil."', telefone = '".$telefone."', escolaridade = '".$escolaridade."', nacionalidade = '".$nacionalidade."', naturalidade = '".$naturalidade."', rg = '".$rg."', cpf = '".$cpf."', profissao = '".$profissao."', endereco = '".$endereco."', bairro = '".$bairro."', cep = '".$cep."', email = '".$email."', cad_unico = '".$cad_unico."', religiao = '".$religiao."', status = 1 WHERE id = '".$id."'";


    $result = mysqli_query($conexao, $sql);

    // insert do cadastro moradia
    $result = mysqli_query($conexao, "INSERT INTO moradia(casa, construcao, tempo, agua, energia, saneamento, outra_casa, frequencia, id) VALUES ('$casa', '$construcao', '$tempo', '$agua', '$energia', '$saneamento', '$outra_casa', '$frequencia', '$id')");

    // insert do cadastro economico

     // insert do cadastro moradia
     $result = mysqli_query($conexao, "INSERT INTO economico(situacao, prog_gov, valor, servico, grupo, renda, id) VALUES ('$situacao', '$prog_gov', '$valor', '$servico', '$grupo', '$renda', '$id')");

     $result = mysqli_query($conexao, "DELETE FROM cadastro WHERE status = '0'");




    echo ("<SCRIPT LANGUAGE='JavaScript'>
	           window.alert('Registro Incluido !!!')
	           window.location.href='principal.php';
	           </SCRIPT>");
}

// Fim do Cadastro Responsável Familiar

// Início do Cadastro Grupo Famíliar

// *
// *
// *


// Fim do Cadastro Grupo Famíliar


// Início do Cadastro Moradia



// Fim do Cadastro Moradia

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <h1>
        Cadastro Cáritas
    </h1>

    <div class="form-container">
    <fieldset>
        <legend>Dados Responsável Familiar</legend>
  
    
    <form action="cadastro.php" method="POST">

        <label for="id">Registro</label>
        <input type="text" id="id" name="id" value="<?php echo $id; ?>" readonly>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
     

        <label for="dt_nascimento">Data do Nascimento:</label>
        <input type="date" name="dt_nascimento" id="dt_nascimento">
     

        <label for="idade">Idade:</label>
        <input type="text" name="idade" id="idade">
     

        <label for="sexo">Sexo:</label>
        <select name="sexo" id="sexo">
            <option value=""></option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>
     

        <label for="est_civil">Estado Cívil:</label>
        <select name="est_civil" id="est_civil">
            <option value=""></option>
            <option value="solteiro">Solteiro (a)</option>
            <option value="casado">Casado (a)</option>
            <option value="divorciado">Divorciado (a)</option>
            <option value="vivuvo">Viúvo (a)</option>
        </select>
     

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone">

        <br>

        <label for="escolaridade">Escolaridade:</label>
        <select name="escolaridade" id="escolaridade">
            <option value=""></option>
            <option value="analfabeto">Analfabeto</option>
            <option value="fundamental-incompleto">Ensino Fundamental Incompleto</option>
            <option value="fundamental-completo">Ensino Fundamental Completo</option>
            <option value="medio-incompleto">Ensino Médio Incompleto</option>
            <option value="medio-completo">Ensino Médio Completo</option>
            <option value="superior-incompleto">Ensino Superior Incompleto</option>
            <option value="superior-completo">Ensino Superior Completo</option>
        </select>
        <br>
     

        <label for="nacionalidade">Nacionalidade:</label>
        <input type="text" name="nacionalidade" id="nacionalidade">
     

        <label for="naturalidade">Naturalidade:</label>
        <input type="text" name="naturalidade" id="naturalidade">
     

        <label for="rg">Registro Geral:</label>
        <input type="text" name="rg" id="rg">
     

        <label for="cpf">Cadastrp Pessoa Física:</label>
        <input type="text" name="cpf" id="cpf">
     

        <label for="profissao">Profissão:</label>
        <input type="text" name="profissao" id="profissao">
     

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco">
     

        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro">
     

        <label for="cep">Cep:</label>
        <input type="text" name="cep" id="cep">
     

        <label for="email">E-mail:</label>
        <input type="text" name="email" id="email">
     
        <br>

        <label for="cad_unico">CAD Único:</label>
        <input type="text" name="cad_unico" id="cad_unico">
     

        <label for="religiao">Religião</label>
        <select name="religiao" id="religiao">
            <option value=""></option>
            <option value="catolica">Católica</option>
            <option value="evangelica">Evangélica</option>
            <option value="espirita">Espirítica</option>
            <option value="matriz-africana">Matriz Africana</option>
        </select>

        <label for="pne">Existem pessoas na família com alergia?</label>
        <select name="pne" id="pne">
            <option value=""></option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>

        <br>

        <label for="pne">Existem pessoas na família com algum tipo de necessidade especial?</label>
        <select name="pne" id="pne">
            <option value=""></option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>


        <label for="">Qual?</label>
        <label for="visual">Visual</label>
        <input type="checkbox" name="visual" id="visual">
        <label for="fisica">Física</label>
        <input type="checkbox" name="fisica" id="fisica">
        <label for="auditiva">Auditiva</label>
        <input type="checkbox" name="auditiva" id="auditiva">
        <label for="mental">Mental</label>
        <input type="checkbox" name="mental" id="mental">
        <label for="neorologica">Neurológica</label>
        <input type="checkbox" name="neorologica" id="neorologica">
        <br>

        <label for="nome_pne">Nome da pessoa com PNE:</label>
        <input type="text" name="nome_pne" id="nome_pne">

        <br>

        <label for="pne">Existem pessoas na família que façam uso de remédio controlado?</label>
        <select name="pne" id="pne">
            <option value=""></option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>
        <label for="remedio">Nome da pessoa com PNE:</label>
        <input type="text" name="remedio" id="remedio">


    </fieldset>

    </div>
    

   




<!-- 
        <h3> 2 - Grupo Familiar</h3>
        <hr>

        <br>

        <label for="dependente">Nome</label>
        <input type="text" name="dependente" id="dependente">

        <label for="grau_parentesco">Grau de Parentesco</label>
        <input type="text" name="grau_parentesco" id="grau_parentesco">

        <label for="dt_nascimento">Data de Nascimento</label>
        <input type="text" name="dt_nascimento" id="dt_nascimento">

        <label for="escolaridade">Escolaridade</label>
        <input type="text" name="escolaridade" id="escolaridade">

        <label for="atividade_atual">Atividade atual</label>
        <input type="text" name="atividade_atual" id="atividade_atual">
        <br> -->


        <hr>

    <!-- Formulário Cadastro de Moradia -->
        <div class="form-container">
        <fieldset>
            <legend>Moradia</legend>
        <label for="casa">Tipo de Moradia</label>
        <select name="casa" id="casa">
            <option value=""></option>
            <option value="propria">Própria</option>
            <option value="alugada">Alugada</option>
            <option value="cedida">Cedida</option>
            <option value="ocupacao">Ocupação</option>
        </select>



        <label for="construcao">Tipo de Construção:</label>
        <select name="construcao" id="construcao">
            <option value=""></option>
            <option value="alvenaria">Alvenaria</option>
            <option value="madeira">Madeira</option>
            <option value="mista">Alvenaria / Madeira</option>
            <option value="palafita">Palafita</option>
        </select>


        <br>
        <label for="tempo">Quanto tempo reside neste local?</label>
        <input type="text" name="tempo" id="tempo">
        <br>


        <label for="agua">Tem água encanda regular?</label>
        <select name="agua" id="agua">
            <option value=""></option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>

        <br>
        <label for="energia">Tem energia elétrica regular?</label>
        <select name="energia" id="energia">
            <option value=""></option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>


        <label for="saneamento">Tem saneamento básico?</label>
        <select name="saneamento" id="saneamento">
            <option value=""></option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>
        <br>

        <label for="outra_casa">Além da residência atual, possuí outra moradia?</label>
        <select name="outra_casa" id="outra_casa">
            <option value=""></option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>

        <br>
        <label for="frequencia">Com que frequência você vai para este local?</label>
        <select name="frequencia" id="frequencia">
            <option value=""></option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
            <option value="outros">Outros</option>
        </select>
        <br>
        </fieldset>
        </div>

        <hr>

        
<!-- Formulário de Cadastro Socioeconôico -->

        <div class="form-container">
        <fieldset>
            <legend>Socioeconômico</legend>
        <label for="situacao">Situação Atual:</label>
        <select name="situacao" id="situacao">
            <option value=""></option>
            <option value="empregado">Empregado</option>
            <option value="desempregado">Desempregado</option>
            <option value="autonomo">Autônomo</option>
            <option value="aposentado">Aposentado</option>
            <option value="pensao">Pensão</option>
            <option value="bpc">BPC</option>
        </select>
        <br>


        <label for="prog_gov">Participa de algum programa de tranferência de renda?</label>
        <select name="prog_gov" id="prog_gov">
            <option value=""></option>
            <option value="nao">Não</option>
            <option value="sim">Sim</option>
        </select>

        <label for="">Qual?</label>
        <label for="bolsa_familia">Bolsa Família</label>
        <input type="checkbox" name="prog_gov" id="bolsa_familia">

        <label for="auxilio_gas">Auxílio Gás</label>
        <input type="checkbox" name="prog_gov" id="auxilio_gas">

        <label for="tarifa_agua">Tarifa Social Água</label>
        <input type="checkbox" name="prog_gov" id="tarifa_agua">

        <label for="auxilio_governo">Auxílio Gás</label>
        <input type="checkbox" name="prog_gov" id="auxilio_governo">

        <br>
        <label for="valor">Valor Mensal:</label>
        <input type="text" name="valor" id="valor">
        <br>

        <label for="servico">A família tem acesso a rede de serviços existentes no território?</label>
        <select name="servico" id="servico">
            <option value=""></option>
            <option value="nao">Não</option>
            <option value="sim">Sim</option>
        </select>

        <label for="servico">Qual?</label>
        <label for="saude">Saúde</label>
        <input type="checkbox" name="servico" id="saude">

        <label for="educacao">Educação</label>
        <input type="checkbox" name="servico" id="educacao">

        <label for="cultura">Cultura</label>
        <input type="checkbox" name="servico" id="cultura">

        <label for="esporte">Esporte</label>
        <input type="checkbox" name="servico" id="esporte">

        <label for="Lazer">Lazer</label>
        <input type="checkbox" name="servico" id="Lazer">


        <br>

        <label for="grupo">A família ou algum membro participa de algum grupo de EPS, Assoiação, etc.</label>
        <select name="grupo" id="grupo">
            <option value=""></option>
            <option value="nao">Não</option>
            <option value="sim">Sim</option>
        </select>

        <br>

        <label for="renda">Qual a renda total famíliar?</label>
        <select name="renda" id="renda">
            <option value=""></option>
            <option value="menor_1_salario">Menor que 1 salário mínimo</option>
            <option value="1_salario">1 salário mínimo</option>
            <option value="maior_1_salario">maior que 1 salário mínimo</option>
            <option value="maior_2_salario">Maior que 2 salário mínimo</option>
            <option value="maior_3_salario">Maior que 3 salário mínimo</option>
            <option value="maior_4_salario">Maior que 4 salário mínimo</option>
        </select>

        </fieldset>
        </div>
        <button type="submit" id="cad-resp" name="cad-resp" class="btn-cadastro">Cadastrar</button>
    
    <!-- </form> -->

        <hr>
    
        <!-- tabela Dependente -->

        <div class="form-container">    
            <h2>Grupo Familiar</h2>

            <!-- <form action="cadDep.php" method="POST"> -->
                <div id="grupo_familiar">

                    <label for="nome_dep">Nome</label>
                    <input type="text" name="nome_dep" id="nome_dep">

                    <label for="grau_parente">Grau de Parente</label>
                    <input type="text" name="grau_parente" id="grau_parente">

                    <label for="dt_nascimento_dep">Data de Nascimento</label>
                    <input type="text" name="dt_nascimento_dep" id="dt_nascimento_dep">

                    <label for="escolaridade_dep">Escolaridade</label>
                    <input type="text" name="escolaridade_dep" id="escolaridade_dep">

                    <label for="atividade_atual">Atividade atual</label>
                    <input type="text" name="atividade_atual" id="atividade_atual">
                    <br>        

                </div>

                <div id="lista">
                    
                </div>
                <input type="button" name="cad-dep" onclick="cadDep()" class="btn-cadastro" value="Cadastrar">
                <!-- <button id="cad-dep" name="cad-dep" onclick="cadDep()" class="btn-cadastro">Cadastrar</button> -->
            </form>



        </div>
        
        <hr>


        <button type="submit" id="cad-resp" name="cad-resp" class="btn-cadastro">Cadastrar</button>

    <!-- <script src="assets/js/caritas.js"></script> -->

</body>

</html>
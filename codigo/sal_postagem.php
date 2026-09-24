<?php
//pegar as variáveis
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$formacao = $_POST['formacao'];

//monta o SQL
// INSERT INTO professor (nome, data_nascimento, formacao)
// VALUES ('Teste', '2000-12-31', 'Mestre História');
$sql = "INSERT INTO professor (nome, data_nascimento, formacao) VALUES ('$nome', '$nascimento', '$formacao')";

//executa SQL
require_once "../conexao.php";
mysqli_query($conexao, $sql);


//desvia a navegação
header("Location: ../sucesso.html");

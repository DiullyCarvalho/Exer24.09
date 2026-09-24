<?php
    //pega o login e senha lá do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //o digitado é igual ao que está no banco?
    $sql = "select * from usuario WHERE email = '$email' AND senha = '$senha'";
    
    require_once "conexao.php";
    $resultado = mysqli_query($conexao, $sql);

    // echo sizeof($resultado);
    $quantidade = mysqli_num_rows($resultado);
    

    //se SIM -> principal.php
    //se NÃO -> index.php
    if ($quantidade == 1) {
        header("Location: principal.php");
    
        //sessão


    }
    else {
        header("Location: index.php?erro=login&email=$email");
    }
?>
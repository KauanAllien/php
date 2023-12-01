<?php
    include '../conexao.php'; 
    //Recebendo dados do formulário//
    $nome = $_REQUEST['nome'];
    $senha = $_REQUEST['senha'];
    $cpf = $_REQUEST['cpf'];
    $codigo = $_REQUEST['codigo'];
    //Código   SQL de inserção no Banco de Dados//
    $sql = "INSERT INTO usuario (codigo,nome,cpf,senha)
    VALUES ('$codigo', '$nome', '$cpf', '$senha')";
    //Ativa código SQL ou  mostra erro se dar errado//
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao Inserir");
    //Carrregar de novo a página principal
    header('location: ../principal.php');


?>
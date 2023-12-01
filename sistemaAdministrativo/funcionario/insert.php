<?php
    include '../conexao.php'; 
    //Recebendo dados do formulário//
    $codigo = $_REQUEST['codigo'];
    $nome = $_REQUEST['nome'];
    $salario = $_REQUEST['salario'];
    $data_nascimento = $_REQUEST['data_nascimento'];
    $cpf = $_REQUEST['cpf'];
    $senha = $_REQUEST['senha'];
    $funcao = $_REQUEST['funcao'];
    //Código   SQL de inserção no Banco de Dados//
    $sql = "INSERT INTO funcionario (codigo, nome, salario, data_nascimento, cpf, senha, funcao)
    VALUES ('$codigo','$nome','$salario','$data_nascimento','$cpf','$senha','$funcao')";
    //Ativa código SQL ou  mostra erro se dar errado//
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao Inserir");
    //Carrregar de novo a página principal
    header('location: ../funcionario.php');

?>
<?php
    include '../conexao.php'; 
    //Recebendo dados do formulário//
    $descricao = $_REQUEST['descricao'];
    $obs = $_REQUEST['obs'];
    //Código   SQL de inserção no Banco de Dados//
    $sql = "INSERT INTO funcao (descricao,obs)
    VALUES ('$descricao', '$obs')";
    //Ativa código SQL ou  mostra erro se dar errado//
    $resultado = mysqli_query($conexao, $sql) or die ("Erro ao Inserir");
    //Carrregar de novo a página principal
    header('location: ../funcao.php');

?>
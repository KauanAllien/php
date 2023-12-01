<?php
    include 'conexao.php';

    //Recebe o cpf e a senha do index.php//
    $cpf = $_REQUEST['cpf'];
    $senha = $_REQUEST['senha'];
    //Seleciona todos os usuarios onde cpf="input cpf" e senha="input de senha"
    $sql = "SELECT * FROM usuario WHERE cpf='$cpf' AND senha='$senha' ";

    $resultado = mysqli_query($conexao, $sql);

    //Procura uma linha especifica e carrega só esse unico registro
    $coluna = mysqli_fetch_assoc($resultado);
    //Se o número de registros de resultado na busca for maior que zero
    if(mysqli_num_rows($resultado) > 0){
        //vai logar - criando variáveis de sessão de acordo como os valores do banco
        session_start();
        $_SESSION['usuario'] = $coluna['nome'];
        $_SESSION['cpf'] = $coluna['cpf'];
        $_SESSION['senha'] = $coluna['senha'];

        //Redireciona para a página principal
        header('location: principal.php');
    }else{
        //não vai logar
        session_unset();              //limpa variável de sessão
        session_destroy();             //destroí sessão
        header('location: index.php');
    }
?>
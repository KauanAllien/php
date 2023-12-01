<?php
    session_start();
    //Se não estiver autenticado , manda para o login
    //Se não existir cpf e senha em variável de sessão 
    if(!isset($_SESSION['cpf']) AND !isset($_SESSION['senha'])){
        session_destroy();                //Destroí sessão
        unset($_SESSION['cpf']);          //Limpa sessão cpf
        unset($_SESSION['senha']);        //limpa sessão senha
        
        header('location: index.php');     //Redireciona
    }

?>
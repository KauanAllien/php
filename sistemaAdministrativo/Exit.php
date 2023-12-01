<?php
    session_start();
    session_destroy();           //Destroí a sessão
    unset($_SESSION['cpf']);    //Limpa a variável de sessão cpf
    unset($_SESSION['senha']);   //Limpa variável de sessão senha

    //Envia para página de login
    header('location: index.php');

    
?>
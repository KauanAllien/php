<?php
    //Fazer conexão Back-End com o Banco de Dados
    $nomeServidor = "sql301.infinityfree.com";
    $userName = "if0_35249653";
    $senha = "Re7AF87Kul03knf";
    $nomeBanco = "if0_35249653_rede_banco";
    //mysqli - driver responsável por conectar com o banco
    $conexao = new mysqli($nomeServidor, $userName, $senha, $nomeBanco);
    //Se a conexão falhar - die encerra a execução a apresenta mensagem
    if($conexao -> connect_error){
        die("Conexão com o banco de dados falhou!".$conexao -> connect_error);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="painel">
        <div class="cabecalho"> 
            <h1>Definição de Cookie</h1>
            <a href="index.html"class="button">Cadastrar Usuário </a>
        </div>

        <div class="conteudo"> 
           <?php
                    //ánalisa se a requisição é tipo POST
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    //Extrai do formulário o Usuario digitado
                    $nome = $_POST["Usuario"];
                    setcookie("nome", $nome, time() + 86400 * 30, "/");

                    echo "Cookie de nome de Usuario definido com sucesso! <br>";
                    echo "Nome Usuário: $nome";
                }else{
                    echo "Erro: Requisição Inválida";
                }
           ?>
        </div>

        <div class="rodape"> 

        </div>





    </div>
</body>
</html>
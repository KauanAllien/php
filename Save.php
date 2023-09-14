<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando Postagem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="painel">
        <div class="cabecalho">
            <h1>Senac Connect</h1>
        </div>

        <div class="conteudo">
            <h2>Postagem enviada com Sucesso! </h2>
            <?php
                //$usuario = "Poca Sombra";
                //criação de cookie
                //nome do cookie + valor + dataExpiração + onde pode acessar(Qualquer lugar "/")
                //setcookie("nome", $usuario, time() + 86400 * 30, "/");
                $usuario = $_COOKIE["nome"];

                //Ánalisa se a requisição foi feita utilizando POST
                if($_SERVER["REQUEST_METHOD"] == "POST"){

                    //Obtém o conteúdo da postagem do campo "postagem"
                    $postagem = $_POST["postagem"];

                    echo "<strong>$usuario</strong> postou: $postagem ";

                    //região abaixo é para criar uma lista de sessão
                    session_start();                   //iniciar sessão para usar variáveis de sessão

                    //se a lista de postagens não(!) existe(isset)
                    if(!isset($_SESSION["postagens"])){
                        //cria uma lista vazia de sessão, só pela 1 vez
                        $_SESSION["postagens"] = array();
                    }

                    //adiciona a variável postagem a lista de postagens(array)
                    array_push($_SESSION["postagens"], $postagem);
                }

            ?>
        </div>

        <div class="rodape">
            <a href="index.html" class="button">Adicionar uma nova postagem</a>
            <a href="Cookie.html" class="button">Cadastrar Usuário</a>
            <a href="search.html"class="button">Buscar</a>
            <a href="Array.php" class="button">Lista de Postagens</a>
        </div>
    </div>
</body>
</html>
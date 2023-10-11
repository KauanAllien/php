<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="STYLE.css">
</head>
<body>
    <?php 
        include "BANCO.php";   //Importar BANCO.php
        session_start();        //Iniciando sessão
    
        //Mudar nome do usuário
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['usuario'])){
            //Cria variável de sessão usuario
            $_SESSION['usuario'] = $_POST['usuario'];
        }
            //Inserir Dados
            // "SE" Requisição do tipo POST "E" se existe uma reuisição chamada mensagem
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mensagem'])){
                $mensagem = $_POST['mensagem'];
                //$usuario = $_SESSION['usuario'] ? $_SESSION['usuario'] : 'Anônimo';   //Formato mais compacto e avançado

                //se existir uma variável de sessão chamada usuario//
                if(isset($_SESSION['usuario'])){
                    $usuario = $_SESSION['usuario'];
                }else{
                    $usuario = 'Anônimo';
                }
                $sql = "INSERT INTO tabela_mensagens(usuario, mensagem) VALUES ('$usuario','$mensagem')";

                //Executa comando no Banco de Dados
                 $conexao -> query($sql);
                
            }

            if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])){
                $id = $_POST['id'];
                $sql = "DELETE FROM tabela_mensagem WHERE id= $id";
                $conexao -> query($sql);
            }

    ?>

    <div class="Painel">
        <h1>Sennac Connect - Chat com PHP e MYSQL</h1>

        <div class="chat">
                <?php
                //Script Sql de Seleção
                    $sql = "SELECT usuario, mensagem, id FROM tabela_mensagens";
                    // Faz execução e armazena todos os registros
                    $resultado = $conexao -> query($sql);
                    //Verifica se o número de registros é maior que zero
                    if($resultado -> num_rows > 0){
                        //Linha armazena 1 resultado por vez escolhido pelo fetch_assoc
                        //Roda looping enquanto fetch_assoc() ler algum registro
                        while($linha = $resultado -> fetch_assoc()){
                            echo '<div class="mensagens">';
                            echo "<p> <b>{$linha['usuario'] }:</b> {$linha['mensagem']}</p>";
                            echo '<form method="POST" action="">';
                            echo "<input type='hidden' name='id' value='{$linha['id']}'>";
                            echo "<button type='submit' name='excluir'> Excluir </button>";
                            echo '</form>';    
                            echo '</div>';
                        }

                        
                        
                        
                    }else{
                        echo "<p>Nenhuma mensagem encontrada!</p>";
                    }
                ?>
        </div>



        <form method="POST" action="" >
            <input type="text" name="mensagem" placeholder="Digite sua Mensagem">
            <button type="submit">Enviar Mensagem</button>
        </form>

        <form method="POST" action="">
            <input type="text" name="usuario" placeholder="Escolha um nome de usuario">
            <button type="submit"> Atualizar Nome </button>           
        </form>
    </div>
</body>
</html>
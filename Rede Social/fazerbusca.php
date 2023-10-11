<?php
    session_start();
    if(isset($_GET["busca"])){     //Se existe alguma busca digitada
        $conteudo = $_GET["busca"];    //Armazena na variável o conteudo valor de input
        if(isset($_SESSION["postagens"])){    //Se tiver itens nas postagens
            echo "<ul>";
            foreach($_SESSION["postagens"] as $postagem){
                if(stripos($postagem,  $conteudo) !== false){
                    echo "<li> $postagem </li>";
                    
                }
            }
            echo "</ul>";

        }

    }
?>
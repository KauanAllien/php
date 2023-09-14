<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1> Meu primeiro programa com php !<h1>

    <!-- Iniciando php -->
    <?php
        //imprimindo na tela
        echo "Hello World";

        //Variáveis
        $nome = "Jubileu";         //aspas duplas "Texto"
        $idade = 17;                //sem aspas "Número"

        //Se idade for maior que 18 anos
        //Estrutura de condição if(se) else(se não)
        if($idade > 18){
            echo " $nome Maior que 18 anos, com $idade anos ";
        }else{
            echo " $nome Menor de 18 anos, com $idade anos ";
        }

        //Estruturas de repetição - looping
        for($num = 1; $num <= 5; $num++){
            echo("<br> Contagem: $num");
        }

        //Estrutura de repetição while
        $contador = 1;
        while($contador <=5){
            echo "<br> Contagem2: $contador";
            $contador++;   //contador = contador +1
        }

        //Criando uma função 
        function saudacao($nome){
            echo "<br> olá, $nome";
        }
        saudacao("Salsicha");
        
        //Lista
        $cores = array("verde","amarelo","vermelho");
        echo "<br> sem for: $cores[0]";
        echo "<br> sem for: $cores[1]";
        echo "<br> sem for: $cores[2]";

        for($n = 0; $n < count($cores); $n++){
            echo "<br> com for: $cores[$n]";
        }

    ?>
    <!-- Finalizando php -->

</body>
</html>
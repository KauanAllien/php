<?php
    include '../conexao.php';
    //Se existe alguma requisição com id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $descricao = $_REQUEST['descricao'];
        $obs = $_REQUEST['obs'];
        $sql = "UPDATE funcao SET descricao ='$descricao', obs='$obs' WHERE id='$id'";
        $resultado = mysqli_query($conexao,$sql);
        //Mandar para a página principal
        header('location: ../funcao.php');
    }else{
        header('location: ../funcao.php');
    }
?>
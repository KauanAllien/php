<?php
    include '../conexao.php';
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM funcao WHERE funcao.id = '$id' ";             
    $resultado = mysqli_query($conexao, $sql) or die("Erro ao excluir");          //Executa o código sql        
    header('location:../funcao.php');              //Direciona para página Principal

?>
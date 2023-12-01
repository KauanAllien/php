<?php
    include '../conexao.php';
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM funcionario WHERE funcionario.id = '$id' ";             
    $resultado = mysqli_query($conexao, $sql) or die("Erro ao excluir");          //Executa o código sql        
    header('location:../funcionario.php');              //Direciona para página Principal

?>
<?php
    include '../conexao.php';
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM usuario WHERE usuario.id = '$id' ";             
    $resultado = mysqli_query($conexao, $sql) or die("Erro ao excluir");          //Executa o código sql        
    header('location:../principal.php');              //Direciona para página Principal

?>
<?php    
    include 'conexao.php';      //Conexão com o banco de dados
    include 'valida.php';       //Verifica se a pessoa está logada
    $destino = "./funcao/insert.php";
    //Se for diferente de vazio , ao receber o código de alteração
    if(!empty($_GET['Alteracao'])){
        $id = $_GET['Alteracao'];
        //Selecionar o registro que tem o id , que foi escolhido para alterar
        $sql = "SELECT * FROM funcao WHERE id='$id'";
        $dados = mysqli_query($conexao,$sql);          //Navegador de Registros  
        $funcaos = mysqli_fetch_assoc($dados);         //Variável tem registros separados em colunas
        $destino = "./funcao/pull.php";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="recursos/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css"/>
</head>
<body>
    <?php include('nav.php');?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 menu">
                    <?php include 'menu.php';?>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md card">
                        <h1>Cadastro</h1>
                        <form action="<?=$destino; ?>" method="POST">
                            <div class="form-group">
                                <label > Id </label>
                                <input name="id" type="text" value="<?php echo isset($funcaos) ? $funcaos['id']:'' ?>" class="form-control" placeholder="Id">
                            </div>

                            <div class="form-group">
                                <label > Descrição: </label>
                                <input  name="descricao" type="text" value="<?php echo isset($funcaos) ? $funcaos['descricao']: '' ?>" class="form-control" placeholder="Sua Descrição">
                            </div>

                            <div class="form-group">
                                <label>Observação:</label>
                                <input name="obs"  type="text" value="<?php echo isset($funcaos) ? $funcaos['obs']: '' ?>" class="form-control" placeholder="...">
                            </div>

                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    <div class="col-md card">
                            <h1>Listagem</h1>

                        <table class="table" id="tabela">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Observação</th>
                                <th scope="col">Modificar</th>
                                <th scope="col">Apagar</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM funcao";
                                    $resultado = mysqli_query($conexao, $sql);
                                    while ($coluna = mysqli_fetch_assoc($resultado)) {
                                            
                                ?>

                                <tr>
                                <th scope="row"> <?php echo $coluna['id']; ?> </th>
                                <td><?php echo $coluna['descricao']; ?></td>
                                <td><?php echo $coluna['obs']; ?></td>
                                <td> <a href="funcao.php?Alteracao=<?=$coluna['id']?>"> <i class="fa-solid fa-pen-to-square" style="color:#0fa9eb";></i> </a></td>
                                <td> <a href="<?php echo "./funcao/delete.php?id=".$coluna['id']; ?>"> <i class="fa-solid fa-trash-can" style="color:#0fa9eb"></i> </a></td>
                                </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js" integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="recursos/script.js"></script>
</body>
</html>
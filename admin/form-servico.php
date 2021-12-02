<?php include_once('../controle.php')?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>

<style>
    .modal{
        width:300px;
    }
    .modal-content {
        width:300px;
    }
    .list-group-item:hover{
        background-color:#F7F6F2!important;
    }
    .bg{
        background-image:url("../imgs/bg.jpg");
        
    }
    .bg2{
        background-color:#333333;
    }
    body{
        color:white;
    }
    .texto-centralizado{
        display:flex;
        justify-content:center;
        margin-top:350px;
    }

    .caixa{
        background-color:gray;
        border-radius:50px;
        margin-left:30%;
        margin-right:30%;
    }

</style>

<body class="bg">
    <?php include_once('../controle.php')?>
    
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5 class="text-white h4">Collapsed content</h5>
                <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        
        <div style="border: black solid; border-radius:30px;background-color:gray; width:400px; height:100%;margin-left: 800px; margin-top:50px; padding:30px;">
            <h1 style=" padding-bottom:10px;border: black solid;margin:0 20% 0 20%;background-color:darkgray;border-radius:30px;text-align:center;width:200px;">Serviços</h1>
            <form style="display:flex; flex-direction:column; justify-content:center;"method="post" action="cadastra-servico.php" enctype="multipart/form-data">
                <label>Descrição:</label>
                <input type="text" name="descServico">
                <br>
                <label>Texto:</label>
                <input type="text" name="textoServico">
                <br>
                <label>Foto:</label>
                <input type="file" name="fotoServico" >
                <div style="height:30px;"></div>
                <input type="submit" value="cadastrar">
            </form>
        </div>

    <?php
        require_once("../classes/Servico.php");
        try {
            $servico = new Servico();
            $listaservico = $servico->listar();
            
        } catch(Exception $e) {
            // echo '<pre>';
            //     print_r($e);
            // echo '</pre>';
            echo $e->getMessage();
        }
    ?>

    <h1>Lista de Serviços Cadastrados</h1>
    <table style="background-color:gray; width:100%; height:100%;"class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descrição</th>
                <th>Texto</th>
                <th>Foto</th>
                
            </tr>
        </thead>
        <tbody id='resultado'>
            <?php foreach ($listaservico as $linha){ ?>
                <tr>
                    <td><?php echo $linha['idservico'] ?></td>
                    <td><?php echo $linha['descservico'] ?></td>
                    <td><?php echo $linha['textoservico'] ?></td>
                    <td><img src=" <?php echo $linha['fotoservico'] ?>" width="100px"></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
                      

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content ">
                    <div class="modal-header bg2">
                        <h5 class="modal-title txt-branco" id="exampleModalLabel">MENU</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg">
                        
                    <ol class="list-group list-group-flush">
                        <li class="list-group-item bg"><a href="form-cliente.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cadastrar Cliente</button></a></li>
                        <li class="list-group-item bg"><a href="form-servico.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cadastrar Serviço</button></a></li>
                        <li class="list-group-item bg"><a href="form-produto.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cadastrar Produto</button></a></li>
                    </ol>

                    </div>
                    <div class="modal-footer bg2">
                        <a href="../destroi-sessao.php">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Início</button>
                        </a>
                    </div>
            </div>
        </div>
        </div>

    
</body>
</html>
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
    .txt-branco{
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

        
            <div class="caixa texto-centralizado">
                    <h1 class="txt-branco "> Bem-vindo Administrador!</h1>
            </div>
       
                      

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content ">
                    <div class="modal-header bg2">
                        <h5 class="modal-title txt-branco" id="exampleModalLabel">MENU</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg">
                        
                    <ol class="list-group list-group-flush">
                        <li class="list-group-item bg"><a href=" # "><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cadastrar Produto</button></a></li>
                        <li class="list-group-item bg"><a href=" # "><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cadastrar Cliente</button></a></li>
                        <li class="list-group-item bg"><a href=" # "><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cadastrar Serviço</button></a></li>
                        <li class="list-group-item bg"><a href=" # "><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fazer Agendamento</button></a></li>
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
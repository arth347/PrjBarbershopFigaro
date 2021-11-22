<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="admin/css2/style.css">
        <title>Login</title>
        
    </head>
    <body class="fonte4">
    

        <form name="login" method="post" action="verifica-login.php" class="form">
            <div class="card">
                <div class="card-top">
                    <img class="imglogin" src="admin/css2/icone_de_login.jpg" alt="">
                    <h2 class="titulo">Painel de Controle</h2>

                    <p>Gerenciar Seu Negócio</p>
                </div>
                

                <div class="card-group">
                    <label>login:</label>
                    <input type="text" name="txtlogin" placeholder="Digite o Login" required>
                    <label>Senha:</label>
                    <input type="password" name="txtsenha" placeholder="Digite a Senha" required>
                   
                </div>

                <div class="card-group btn">
                    <br>
                    <button type="submit" value="Entrar"> Acessar </button>


                </div>


                <div class="card-group btn">
                    <br>

                    <button onclick="location.href='index.php'" type="button" > Voltar para a Home </button>
                    
                    
                </div>
                
            </div>
            
        </form>    



    </body>
</html>
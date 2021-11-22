<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo-servicos.css">
        <link rel="stylesheet" href="estilo.css">
        <title>Serviços</title>
    </head>
    
    <body class="gradient">

       <?php include'navbar.php' ?>
       
       
       <div>
           <br>
        </div>
        <div style="margin-bottom:50px;" class="container-servicos">
            
            <div class="container-redondo fonte">
                <h1 style="font-family: 'Anton', sans-serif;padding-top: 20px;">serviços</h1>
                
                <div style="padding-top:20px;"class="caixadeservicos">
                    
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="imgs/servicos/barber.png" alt="Card image">
                        <div style="margin-left:100px;" class="card-body">
                            <h4 style="font-size:30px;" class="card-title">Barba</h4>
                            <p style="font-size:40px;"class="card-text">R$10,00</p>
                            <a style="font-size:30px;" href="#" class="botao">Agendar</a>
                        </div>
                    </div>
                    
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="imgs/servicos/Hair.png" alt="Card image">
                        <div style="margin-left:100px;" class="card-body">
                            <h4 style="font-size:30px;" class="card-title">Cabelo</h4>
                            <p style="font-size:40px;"class="card-text">R$15,00</p>
                            <a style="font-size:30px;" href="#" class="botao">Agendar</a>
                        </div>
                    </div>
                    
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="imgs/servicos/HairAndbarber.png" alt="Card image">
                        <div style="margin-left:100px;"class="card-body">
                             <h4 style="font-size:30px;" class="card-title">Barba e Cabelo</h4>
                            <p style="font-size:40px;" class="card-text">R$30,00</p>
                        <a style="font-size:30px;" href="#" class="botao">Agendar</a>
                    </div>
                </div>
                
            </div>
            
            <h1 style="font-family: 'Anton', sans-serif; margin-top:20px;">Clique em "Agendar" e agende seu corte</h1>
            
        </div>
        
    </div>
</body>
<footer>
    <div>
        <?php include 'footer.php' ?>
    </div>
    
</footer>
    
    
    
    </html>
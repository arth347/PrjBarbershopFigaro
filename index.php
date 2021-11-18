<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo.css">
        <!--FONTE 1-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <!--FONTE 2-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
        
        <title>BarberShop Figaro</title>
        
    </head>

    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 500px;
        }
    </style>

    <body>
        
        <?php include'navbar.php'?>

             <!--CAROUSEL-->
        <div>
            <div id="demo" class="carousel slide" data-ride="carousel">

                
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
    
            
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imgs/carroussel/cabelo3.png" alt="Los Angeles" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="imgs/carroussel/cabelo2.png" alt="Chicago" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="imgs/carroussel/cabelo.png" alt="New York" width="1100" height="500">
                    </div>
                </div>
    
            
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>

        </div>   
            <!--🔽 conteudo do site é daqui pra baixo 🔽-->
        <div class="background-2">
            <div class="alinhamento-container-custom">
                <div class="container-custom fonte2 alinhamento-txt-container-custom">
                    <h1>Conheça nossa Barbearia</h1>
                </div>
            </div>
            
            <div style="margin-left:280px;">

                <div style="display:flex; justify-content:flex-start;">
                    <div class="bg alinhamento-cx-txt-picapau txtcentro fonte">
                        <h2>Nossa história</h2>
                        <h3> A nossa barbearia foi inspirada <br> 
                            no desenho animado do pica pau,  <br> 
                            em um episódio em que ele        <br> 
                            faz um papel de barbeiro.       
                        </h3>
                    </div>

                    <!--gif do picapau-->
                    <div class="alinhamento-gif ">
                        <img class="config-gif" src="imgs/figaro.gif" alt="figaro">         
                    </div>
                </div>  

            </div>

                <div style="margin-bottom:50px;" class="container-custom2">
                    
                    <div style="margin-left:450px; margin-top:50px; margin-bottom:50px;" class="container-custom fonte2 alinhamento-txt-container-custom">
                            <h1>Galeria</h1>
                    </div>

                            

                        <div style="margin-right:120px;" class="container">
                            <div class=" row grid ">
                                    <i><div class="col-sm-3 bg-warning"><img src="imgs/galeria/semfoto.png" ></div></i>
                                    <i><div class="col-sm-3 bg-warning"><img src="imgs/galeria/semfoto.png" ></div></i>
                                    <i><div class="col-sm-3 bg-warning"><img src="imgs/galeria/semfoto.png" ></div></i>
                                    <i><div class="col-sm-3 bg-warning"><img src="imgs/galeria/semfoto.png" ></div></i>                                       
                            </div>
                        </div>      
                </div>
                         

                                <!--COMENTARIOS SOBRE A BARBEARIA-->
              <div style=margin-top:50px;>

                  <div class="comentarios fonte" style="display:flex; flex-direction:row">     

                      <div class="media border p-3">
                          <img src="imgs/clientes/cliente1.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                          <div class="media-body">
                              <h4>Guilherme <small><i>Cliente ativo,des de dezembro de 2016</i></small></h4>
                              <p>Amo o pica pau. </p>
                              <p>★★★★★☆</p>
                          </div>
                      </div>        
                     <div class="media border p-3">
                         <img src="imgs/clientes/cliente4.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                         <div class="media-body">
                             <h4>Leoncio <small><i>Cliente ativo des de janeiro de 2021</i></small></h4>
                             <p>Bolina de gorfe. </p>
                             <p>★★★★☆☆</p>
                         </div>
                     </div>        
                     <div class="media border p-3">
                         <img src="imgs/clientes/cliente3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                         <div class="media-body">
                             <h4>Zeca urubu <small><i>Cliente ativo des de junho de 2018</i></small></h4>
                              <p>Barbearia chave demais, dexaro meu cabelin na régua. </p>
                             <p>★★★★★★</p>
                         </div>
                     </div>       
                     <div class="media border p-3">
                         <img src="imgs/clientes/cliente2.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                         <div class="media-body">
                             <h4>Pablo Escolar <small><i>Cliente ativo, des de setembro de 2018</i></small></h4>
                             <p>gostei do lugar, perto da minha casa </p>
                             <p>★★★★☆☆</p>
                         </div>

                    </div>     
                </div>
             </div>
            
        </div>
    
    </body>
<footer>
    <div>
        <?php include 'footer.php' ?>
    </div>
    
</footer>
   

</html>


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
        <!--FONTE 3-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
        <!--FONTE 4-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@1,600&display=swap" rel="stylesheet"> 
        <title>BarberShop Figaro</title>
        
    </head>

    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height:90vh;
            filter:blur(4px);
           
        }

        .logo-central{
            width:500px;
            
        }
    </style>

    <body class="gradient"> 
       
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
                                <img src="imgs/carroussel/barber3.png" alt="Los Angeles" width="1100" height="500">
                            </div>
                            <div class="carousel-item">
                                <img src="imgs/carroussel/barber2.png" alt="Chicago" width="1100" height="500">
                            </div>
                            <div class="carousel-item">
                                <img src="imgs/carroussel/barber.png" alt="New York" width="1100" height="500">
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
           
                <img style="position:absolute; margin-left:37%; margin-top:10%; "class="logo-central"src="imgs/logo3.png">
            
        <div class=" background-2">
            <div class="alinhamento-container-custom">
                <div class="container-custom fonte4 alinhamento-txt-container-custom">
                    <h1>Conheça nossa Barbearia</h1>
                </div>
            </div>
            
            <div style="margin-left:280px;">

                <div style="display:flex; justify-content:flex-start;">
                    <div class="bg-colorido alinhamento-cx-txt-picapau txtcentro fonte">
                        <h2 style="font-size:50px;">Nossa história <br>
                        <h3 style="margin-top:10px;" class="h3"> A nossa barbearia foi inspirada <br> 
                                                                no desenho animado do pica pau,<br>
                                                                &nbsp;em um episódio em que ele faz um <br> 
                                                                papel de barbeiro.&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        </h3>
                    </div>

                    <!--gif do picapau-->
                    <div class="alinhamento-gif ">
                        <img class="config-gif" src="imgs/figaro.gif" alt="figaro">         
                    </div>
                </div>  

            </div>

                
                    
                    <div style="margin-left:24%; margin-top:50px; margin-bottom:50%; position:absolute;" class="container-custom2 fonte4 alinhamento-txt-container-custom">
                        <div class="bg-config" style="background-image:url('imgs/logo.png');">
                            
                                <h3 class="txt-beneficios" style="border-bottom-style:solid;border-bottom-width: 0px;padding-bottom: 0px;margin-bottom: 1000px;padding-top: 200px;padding-left: 88px;">
                                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                                       <strong style="font-size:50px;">beneficios </strong> 
                                        <br>
                                        <br>
                                    • Ótima localização. 🧭 <br><br>                    
                                    • ótimos funcionários. 🤠  <br><br>                                                              
                                    • Produtos de alta qualidade. 👍   <br><br>                                                              
                                    • Pica-Pau 🥵<br>
                                </h3>                                                                                                                                                              
                        </div>
                    </div>
                                <div style="display:flex;">                     
                                    <div style="margin-left:100px;" class="barberpole-gif bg-config"></div>   

                                    <div style="margin-left:800px;padding-right: 422px;" class="barberpole-gif bg-config"></div>
                                </div>
                                <!--PRODUTOS-->
                        <div class="container-custom2 fonte4 sombra" style="margin:100px 80px; width:90%; height:1000px;">
                        <h1 style="padding:50px 50px 20px 50px; font-size:50px;">Produtos</h1>
                        
                          <div class="neon produtos" style="display:flex;flex-direction:column; margin-left:3%; padding-bottom:1%;">
                            <div style="font-size:30px;margin-top: 368px;">
                                <a href="" class="botao" style="font-size:30px;margin-left: 68px; ">Comprar</a>
                                <a href="" class="botao" style="font-size:30px;margin-left: 106px;">Comprar</a>
                                <a href="" class="botao" style="font-size:30px;margin-left: 207px;">Comprar</a>
                                <a href="" class="botao" style="font-size:30px;margin-left: 213px;">Comprar</a>
                            </div>
                            <div style="margin-top: 119px;">
                                <a href="" class="botao" style="font-size:30px;margin-left: 292px;">Comprar</a>
                                <a href="" class="botao" style="font-size:30px;margin-left: 400px;">Comprar</a>
                            </div>
                          </div>
                        </div>

            <!------------------------------COMENTARIOS SOBRE A BARBEARIA----------------------------------------------------------------------------------------------------------------->
              <div class="comentarios-head fonte3" style=margin-top:50px;>
                <h1>Comentários</h1>
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


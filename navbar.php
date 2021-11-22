<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="redes-sociais.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><!-------------------------------------FONTE-->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><!----------------------------FONTE-->
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"><!------FONTE-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style>

    .claro {
        opacity: 0.9;
    }

    .fixo{
        position: fixed; /* Set the navbar to fixed position */
        top: 0; /* Position the navbar at the top of the page */
        width: 100%; /* Full width */
    }
   
</style>

<body>
    
        <nav style="font-family: 'Anton', sans-serif" class="navbar navbar-expand-sm bg-dark justify-content-center sticky-top claro fixo">

            <a class="navbar-brand" href="index.php">
                <img src="imgs/logo.png" alt="Logo" style="width:85px;">
            </a>

            <ul style="font-size:25px;" class="navbar-nav ">
                <li class="nav-item">
                    <a style="padding:0px 15px;"class="nav-link" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a style="padding:0px 15px;"class="nav-link" href="servicos.php">Serviços</a>
                </li>
                <li class="nav-item">
                    <a style="padding:0px 15px;"class="nav-link" href="faleconosco.php">Fale conosco</a>
                </li>
                <li class="nav-item">
                    <a style="color:red; font-size:20px; padding:10px;"class="nav-link" href="login.php">login</a>
                </li>

                <div>
                    <a style="font-size: 30px;" href="#" class="fa fa-facebook"></a>
                    <a style="font-size: 30px;" href="#" class="fa fa-instagram"></a>
                </div>

            </ul>

        </nav>
   

    



</body>


</html>

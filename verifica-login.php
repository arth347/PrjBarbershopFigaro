<?php

$login = $_POST['txtlogin'];
$senha = $_POST['txtsenha'];

if( ($login == 'adm') && ($senha=="123") ){

    header("Location:   admin/tela-do-adm.php ");
    session_start();
    $_SESSION['login-session'] = $login;
    $_SESSION['senha-session'] = $senha;
    
}else{
    header("Location: admin/erro.php");


}



?>
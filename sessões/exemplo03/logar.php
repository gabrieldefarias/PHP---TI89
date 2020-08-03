<?php
    session_start();

    $login = $_POST['txt_login'];
    $senha = $_POST['txt_senha'];
    //echo $login, $senha;

    if(($login == "admin") and ($senha == "admin")){
        $_SESSION ['logou'] = 1;
        header('location: restrito.php');
    }else{
        $_SESSION ['logou'] = 0;
        header('location: index.php');
    }
?>
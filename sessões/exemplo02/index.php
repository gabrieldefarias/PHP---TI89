<?php
    session_start();
    $login ="admin";
    $senha ="123";

    if($login =="admin" and $senha=="123"){
        $_SESSION['logado'] = true;
        echo "logado";
    }else{echo "Não logado";}
?>
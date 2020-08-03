<?php
    session_start();

    if($_SESSION['logado']){
        echo "Usuário logado";
    }else{
        echo "Página restrita";
    }
?>
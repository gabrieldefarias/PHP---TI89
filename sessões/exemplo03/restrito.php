<?php
    session_start();

    if($_SESSION['logou'] ==1){
        echo "Bem vindo a pagina restrita" . "<br>";
        echo "<a href='logout.php'>Sair</a>";
    }else{
        header('location: index.php');
    }
?>
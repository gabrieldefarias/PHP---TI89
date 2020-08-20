<?php
    $servidor ='localhost';
    $usuario  ='root';
    $senha    ='';
    $db_banco ='db_carrinho';

    $conectar = mysqli_connect($servidor,$usuario,$senha,$db_banco);
    if(!$conectar){
        echo 'Error, ao conectar com o banco';
    }
?>
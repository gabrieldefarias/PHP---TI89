<?php
    header('content-type:text/html;charset=utf-8');
    //criar as varivais de ambiente
    $servidor ='localhost';
    $usuario  ='root';
    $senha    ='';
    $banco    ='db_cadastro';

    //funcao para conectar mysql_connect()
    $conn = mysqli_connect($servidor,$usuario,$senha,$banco);
    if(!$conn){
        echo "Error ao conectar com o banco de dados.";
    }
?>
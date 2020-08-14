<?php
    header('content-type:text/html;charset=utf-8');
    //criar variavel do ambiente
    $servidor ='localhost';
    $usuario  ='root';
    $senha    ='';
    $banco    ='db_cadastro';

    $conn = mysqli_connect($servidor,$usuario,$senha,$banco);
    if(!$conn){
        echo "[ERRO], conexão não foi estabelecida";
    }
?>
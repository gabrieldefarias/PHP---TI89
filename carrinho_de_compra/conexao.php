<?php
    $servidor ='localhost';
    $usuario  ='root';
    $senha    ='';
    $banco    ='db_carrinho';

    $cnn = mysqli_connect($servidor,$usuario,$senha,$banco);
    if(!$cnn){
        echo "[ERRO], conexão não estabelecida";
    }
?>
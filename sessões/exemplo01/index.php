<?php
    session_start();
    header('conten-_type:text/html;charset=utf-8');

    $_SESSION['carrinho'] = "5940";
    $_SESSION['codigo_produto'] = "003";

    echo "O número do seu carrinho " . $_SESSION['carrinho'] . "<br>";
    echo "O número do seu produto " . $_SESSION['codigo_produto'];
?>
<?php
    header('content-type:text/html;charset=utf-8');
    function soma_valores($valor1,$valor2,$valor3){
        $soma = $valor1+$valor2+$valor3;
        echo "A soma dos valores é " . $soma;
    }
    $n1 = 10;
    $n2 = 20;
    $n3 = 30;
    soma_valores($n1,$n2,$n3);
?>
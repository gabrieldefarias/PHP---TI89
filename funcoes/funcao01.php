<?php
    header('content-type:text/html;charset=utf-8');    
    /*
        Toda função possui um nome, seguido de um par de parenteses,
        e dentro do parenteses pode possuir parametros ou srgumentos e sempre começa 
        pelo comando function
    */
    function triplo($numero){
        $valor = $numero * 7;
        return $valor;
    }
    /* Chamada de função */
    $x = 5;
    echo "O triplo passado da variavel $x é " . triplo($x);
?>
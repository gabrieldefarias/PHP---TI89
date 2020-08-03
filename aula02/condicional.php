<?php
    /*
        estrutura de controle - condicional if
        sintaxe:
        1. if(condição){

        } else{

        }
        2. 

        >
        >=
        <
        <=
        <>
    */
    $a=10;
    $b=5;
    if($a>$b){
        echo "Maior valor" . $a;
    }elseif($b>$a){
        echo "Maior valor" . $b;
    }
?>
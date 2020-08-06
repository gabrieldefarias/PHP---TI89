<?php
    /*
        '05/08/2020'
        Usar uma função que retorna parte de uma cadeia de caracteres
        $dia = 05
        $mes = 08
        $ano = 2020
        função chamada substr(parte de uma cadeia de caractere)
        $dia = substr('05/08/2020',0,2) = 05
        $mes = substr('05/08/2020',3,2) = 08
        $ano = substr('05/08/2020',6,4) = 2020

        $data = '05/08/2020';
        echo $data . "<br>";
        echo substr($data,0,2) . "<br>";
        echo substr($data,3,2) . "<br>";
        echo substr($data,6,4) . "<br>";
    */
    echo databr('06/08/2020',0);
    function databr($data,$opcao){
        if($opcao == 1){
            $dia = substr($data,0,2);
            $mes = substr($data,3,2);
            $ano = substr($data,6,4);
            $databr = $ano . " - " . $mes . " - " . $dia;
        }else{
            $dia = substr($data,0,2);
            $mes = substr($data,3,2);
            $ano = substr($data,6,4);
            $databr = $dia . " / " . $mes . " / " . $ano;
        }
        return $databr;
    }
?>
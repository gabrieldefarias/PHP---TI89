<?php
    header('content-type:text/html;charset=utf-8');    
    /*
        Função strtoupper, converte tudo para maiusculo
               strtolower, converte tudo para minusculo
               str_replace, realizar a troca
    */
    function Maisculo($string){
        $string = strtoupper($string);
        $string = str_replace("á","Á",$string);
        $string = str_replace("é","É",$string);
        $string = str_replace("í","Í",$string);
        $string = str_replace("ó","Ó",$string);
        $string = str_replace("ú","Ú",$string);

        $string = str_replace("â","Â",$string);
        $string = str_replace("ê","Ê",$string);
        $string = str_replace("î","I",$string);
        $string = str_replace("ô","Ô",$string);
        $string = str_replace("û","U",$string);

        $string = str_replace("a","A",$string);
        $string = str_replace("e","E",$string);
        $string = str_replace("i","I",$string);
        $string = str_replace("o","O",$string);
        $string = str_replace("u","U",$string);
        $string = str_replace("ã","Ã",$string);
        return $string;
    }
    /* Chamada */
    $nome = "João José das Colves";
    $novo_nome = Maisculo($nome);
    echo "Nome do Raz.. " . $novo_nome;
?>
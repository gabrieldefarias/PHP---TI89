<?php
    header('content-type:text/html;charset=utf-8');
    /*
        Vetor, representar com apenas uma coluna clube[]
    */
    function clubes(){
        $clubes[] = "Grêmio";
        $clubes[] = "Palmeiras";
        $clubes[] = "Flamengo";
        $clubes[] = "Atlético Mineiro";
        $clubes[] = "Bahia";
        return $clubes;
    }
    /* Chmada */
    $nome = clubes();
    for ($i = 0; $i<sizeof($nome);$i++){
        echo "\$nomme[$i] vale $nome[$i] <br>";
    }
?>
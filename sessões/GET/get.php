<?php
    //var_dump($_GET); //matriz ou array
    header('conten-_type:text/html;charset=utf-8');
    /* Passados valores na URL == (get.php?acao=excluir&id=5)*/

    $acao = $_GET['acao'];
    $id = $_GET['id'];

    echo "Tipo de ação = " . $acao . "<br>";
    echo "Número de id = " . $id;

?>
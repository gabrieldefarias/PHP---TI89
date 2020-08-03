<?php
    //var_dump($_GET);//matriz ou array

    /* Sem passagem de valores na URL, somente o arquivo .php*/
    header('content-type:text/html;charset=utf-8');
    //$acao = $_GET['acao'];
    //$id =$_GET['id'];

    /* Estrutura de controle Switch
    Sintaxe  SWITCH (condicao):
                #code
                default: caso algumas da opções anterior nao satisfeita
                #code
                endswitchc;
    */
    if (isset($_GET['acao'])){
        $acao = $_GET['acao'];
    }else{$acao = null;}

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }
    switch ($acao):
    case 'excluir':
        echo ' excluir um registro no banco '. $id;
    break;

    default:
        echo ' nenhuma acao foi tomada';
    break;
    endswitch;
?>
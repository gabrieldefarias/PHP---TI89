<?php
header('content-type:text/html;charset=utf-8');
//criar variavel do ambiente
$servidor ='localhost';
$usuario  ='root';
$senha    ='';
$banco    ='db_crud';

$conn = mysqli_connect($servidor,$usuario,$senha,$banco);
if(!$conn){
    echo "[ERRO], conexão não estabelecida";
}//else{
//    echo "Sucesso na conexão";
//}
?>
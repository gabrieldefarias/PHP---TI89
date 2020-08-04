<?php
    $servidor ='localhost';
    $username ='root';
    $senha ='';
    $banco ='db_cadastro';

    $conn = mysqli_connect($servidor,$username,$senha,$banco);
    if(!$conn){echo "Erro ao conectado";}
?>
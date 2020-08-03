<?php
    include_once 'conexao.php';

    $id = $_GET['id'];
    $result = mysqli_query($conn,"DELETE FROM usuario where id = $id");
    if(!$result){
        echo "Erro ao deletar o registro";
    }else{
        header('location:index.php');
    }
?>
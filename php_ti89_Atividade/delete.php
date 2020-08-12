<?php
    include_once 'conexao.php';

    $id = $_GET['idProduto'];
    $result = mysqli_query($conn,"DELETE FROM produto where idProduto = $id");
    if(!$result){
        echo "Erro ao excluir o registro";
    }else{
        header('location:index.php');
    }
?>
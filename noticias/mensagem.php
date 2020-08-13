<?php
    header('content-type:text/html;charset=utf-8');
    include_once 'conexao.php';
    if(isset($_POST['cadastrar'])){
        $nome = $_POST['txt_nome'];
        $email = $_POST['txt_email'];
        $mensagem = $_POST['txt_mensagem'];
        echo $nome, $email, $mensagem;
        $sql = "INSERT INTO tb_mensagem(id,nome,email,dtcad,mensagem)
                VALUE(null,'$nome','$email',now(),'$mensagem')";
        $resultado = mysqli_query($conn, $sql);
        if($resultado){
            header('location: index.php');
        }else{
            echo "[ERRO] mensagem não foi cadastrado.";
        }
    }

?>
<?php
    include_once 'conexao.php';
    if(isset($_POST['submit'])){
        $nome_usuario = $_POST['txt_nome_usuario'];
        $email_usuario = $_POST['txt_email_usuario'];
        $senha_usuario = $_POST['txt_senha_usuario'];
        $niveis_acesso = $_POST['select_niveis'];

        /*
            echo $nome_usuario."<br>";
            echo $email_usuario."<br>";
            echo $senha_usuario."<br>";
            echo $niveis_acesso."<br>";
        */

        $sql = "INSERT INTO usuarios(id,nome,email,senha,niveis_acesso,created)
            VALUES(null,'$nome_usuario','$email_usuario','$senha_usuario','$niveis_acesso',now())";
        $resultado = mysqli_query($conn,$sql);
        if(mysqli_affected_rows($conn) !=0){
            echo "Cadastrado com sucesso.";
            //header('location: index.php');
        }else{
            echo "[ERRO] falha ao cadastrar.";
        }
    }
?>
<?php
    include_once 'conexao.php';

    if(isset($_POST['Inserir'])){
        //mysqli_escape_string()
        $nome = $_POST ['txt_nome'];
        $email = $_POST ['txt_email'];
        $login = mysqli_escape_string($conn,$_POST['txt_login']);
        $senha = mysqli_escape_string($conn,$_POST['txt_senha']);

        //echo "Nome" . $nome . "<br>";
        //echo "Email" . $email . "<br>";
        //echo "Usuario" . $login . "<br>";
        //echo "Senha" . $senha . "<br>";
        $senha = md5($senha);
        $sql = "INSERT INTO usuario(id,nome,email,login,senha) VALUES(null,'$nome','$email','$login','$senha')";

        if(mysqli_query($conn,$sql)){
            header('location: frm_cadastrar.php');
        }else{
            echo "Erro ao inserir os dados.";
        }
    }
?>
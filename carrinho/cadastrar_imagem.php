<?php
    include_once 'conexao.php'; 
    session_start();
    // $SendCardimg = filter_input(INPUT_POST,'SendCardImag',FILTER_SANITIZE_STRING);
    if(isset($_POST['SendCardImag'])){
    $nome = $_POST['nome'];
    $nomeImg = $_FILES['imagem']['name'];
    //var_dump($_FILES['imagem']);
    $sql = "INSERT INTO  imagem(id,nome,imagem) 
    values(null,'$nome','$nomeImg')";
    $resultado = mysqli_query($conectar,$sql);
    if ($resultado){
        //registro inserido com sucesso
        $_SESSION['msg'] ="<p style='color:green;'>Registro salvo com sucesso</p>";
        header('location:index.php');
        }else{
            $_SESSION['msg'] ="<p style='color:red;'>Error, ao gravar no banco</p>";
            header('location:index.php');
        }
    }
?>
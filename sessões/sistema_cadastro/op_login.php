<?php
    include_once 'conexao.php';
    session_start();

    if(isset($_POST['logar'])){

    $txt_usuario=$_POST['txt_usuario'];
    $text_senha = $_POST['txt_senha'];

    $text_senha =md5($text_senha );

    $sql ="SELECT * FROM usuario where login ='$txt_usuario' and senha='$text_senha' ";

    $resultado = mysqli_query($conn,$sql);

    if (mysqli_num_rows($resultado)>0){
        $_SESSION['logou'] = 1;
        header('location:restrito.php');
    }else{  
        $_SESSION['logou'] = 0;
        header('location:frmlogin.php');
    }
}
?>
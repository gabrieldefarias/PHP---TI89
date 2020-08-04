<?php
    session_start();

    if ($_SESSION['logou'] == 1){
        header('location:principal.php');
    }else{
        header('location:frmlogin.php');
    }
?>
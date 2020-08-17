<?php
    require_once ('../config.php');
    if(isset($_POST['txt_categoria'])){
        $ncategoria = $_POST['txt_categoria'];
        $ativo = isset($_POST['check-ativo'])?'1':'0';
        $cat = new Categoria(
            $ncategoria, $ativo
        );
        $cat->insert();
        header('location:principal.php?link=2&msg=ok');
    }
?>
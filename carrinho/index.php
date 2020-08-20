<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravar imagem no banco</title>
    <style>
    fieldset{width: 300px; margin: 0 auto; border-radius: 10px;}
    </style>
</head>
<body>
    <fieldset>
        <h2>Cadastrar imagem</h2>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
        ?>
        <form action="cadastrar_imagem.php" method="post" enctype="multipart/form-data">
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Forneça seu nome"><br><br>
            <label>Imagem</label>
            <input type="file" name="imagem"><br><br>
            <input type="submit" name="SendCardImag" value="Cadastrar">
        </form>
    </fieldset>
</body>
</html>
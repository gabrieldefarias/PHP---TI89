<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravar Imagem no Banco de Dados</title>
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
                unset($_SESSION['msg']);
            }
        ?>
        <form action="cadastrar_imagem.php" method="POST" enctype="multipart/form-data">
            <label for="">Nome:</label> <br>
            <input type="text" name="nome" placeholder="Forneça um nome"> <br><br>
            <label for="">Imagem:</label> <br>
            <input type="file" name="imagem"> <br><br>
            <input type="submit" name="SendCardImag" value="Cadastrar">
        </form>
    </fieldset>
</body>
</html>
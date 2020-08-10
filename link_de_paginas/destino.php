<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Resgatar a variavel -->
    <?php
        $salada = array('img/imagem01.jpg','img/imagem02.jpg','img/imagem02.jpg');
        $fruta = $_GET['codigo'];
        echo $salada[$fruta];
    ?> <br>
    <img src="<?php echo $salada[$fruta];?>" alt="">
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <style>
        body{background-color: #e3e3e3;}
        img{width: 120px; height: 100px; border: 1px solid;}
        #corpo{border: 1px solid; margin: 0px 100px; background-color: white; padding: 0px 20px;}
    </style>
</head>
<body>
    <div id="corpo">
        <?php
            include_once 'conexao.php';
            header('content-type:text/html;charset=utf-8');
            $sql = "SELECT * FROM produtos";
            $qy = mysqli_query($cnn,$sql);

            while($ln = mysqli_fetch_assoc($qy)){
                echo '<h2>'.$ln['nome'].'</h2><br>';
                echo 'Preço: R$ ' .number_format($ln['preco'],2);
                echo '<img src="imagem/'.$ln['imagem'].'"><br>';
                echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'">Adicionar ao carrinho</a>';
            }
        ?>
    </div>
</body>
</html>
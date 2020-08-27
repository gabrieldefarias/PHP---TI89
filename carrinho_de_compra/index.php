<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <style>
        body{background-color: #e3e3e3;}
        h1{text-align: center; color: blue;}
        img{width: 170px; height: 130px; border: 1px solid; margin: 0px 10px;}
        #corpo{border: 1px solid; margin: 0px 200px; background-color: white; padding: 10px 20px;}
        a{
            background-color: #e3e3e3; color: black; text-decoration: none; border: 1px solid black; 
            margin: 0px 30px; padding: 5px;
        }
        a:hover{background-color: black; color: white;}
    </style>
</head>
<body>
    <div id="corpo">
        <?php
            include_once 'conexao.php';
            header('content-type:text/html;charset=utf-8');
            echo "<h1>Carrinho de compras<br>Faça as suas compras conosco</h1>";
            $sql = "SELECT * FROM produtos";
            $qy = mysqli_query($cnn,$sql);

            while($ln = mysqli_fetch_assoc($qy)){
                echo '<h2>'.$ln['nome'].'</h2><br>';
                echo '<img src="imagem/'.$ln['imagem'].'">';
                echo 'Preço: R$ ' .number_format($ln['preco'],2);
                echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'">Adicionar ao carrinho</a>';
            }
        ?>
    </div>
</body>
</html>
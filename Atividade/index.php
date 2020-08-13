<?php
    //Para usar o arquivo de conecção faço
    include_once 'conexao.php';
    
    $result =mysqli_query($conn,"SELECT * FROM produto");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        td{padding: 5px;}
        .foi a{
            padding: 10px; background-color: blue; color: white; border: 1px solid;
            text-decoration: none; border-color: black; margin-left: 20px;
        }
        .foi a:hover{color: blue; background-color: white;}
        a:hover{color: red;}
        body{background-color: #e3e3e3;}
        table{background-color: white; margin-left: 20px;}
        form{margin-left: 20px;}
    </style>
</head>
<body>
    <p class="foi">
        <a href="adicionar.php">Adicionar novo produto</a>
    </p>
    <table border="1" width="70%">
        <tr>
            <td>ID</td>
            <td>Nome do produto</td>
            <td>Data de entrega</td>
            <td colspan="2" align="center">Ação</td>
        </tr>
        <?php
            while($dados = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" .$dados['idProduto'] ."</td>";
                    echo "<td>" .$dados['nome'] ."</td>";
                    echo "<td>" .$dados['dataProduto'] ."</td>";
                    echo "<td> <a href='edit.php?idProduto=$dados[idProduto]'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>" ."</td>";
                    echo "<td> <a href='delete.php?idProduto=$dados[idProduto]'><i class='fa fa-trash' aria-hidden='true'></i></a>" ."</td>";
                echo "<tr>";
            }
        ?>
    </table>
</body>
</html>
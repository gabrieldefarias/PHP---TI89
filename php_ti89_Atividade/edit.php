<?php
    include_once 'conexao.php';
    if(isset($_POST['update'])){
        $id = $_POST['idProduto'];
        $nome = $_POST['txtnome'];
        $data = $_POST['txtdata'];
        $result = mysqli_query($conn,"UPDATE produto set nome='$nome',dataProduto='$data' where idProduto=$id");
        if($result){
            header('location:index.php');
        }
    }
?>
<?php
    //$id = 1;
    $id = $_GET['idProduto'];
    $result = mysqli_query($conn,"SELECT * from produto where idProduto = '$id'");
    while($dados = mysqli_fetch_array($result)){
        $nome = $dados['nome'];
        $data = $dados['dataProduto'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar arquivos</title>
    <style>
        table{
            margin-left: 450px; margin-top: 50px; color: blue; background-color: white;
            padding: 10px; border: 1px solid; border-color: black;
        }
        body{background-color: #e3e3e3;}
    </style>
</head>
<body>
    <form action="edit.php" method="post">
        <table border="0">
            <tr>
                <td>Produto:</td>
                <td><input type="text" name="txtnome" value=<?php echo $nome ?>></td>
            </tr>
            <tr>
                <td>Entregar:</td>
                <td><input type="text" name="txtdata" value=<?php echo $data ?>></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" name="idProduto" value= <?php echo $_GET['idProduto']; ?>></td>
                <td><input type="submit" name="update" value="Adicionar"></td>
            </tr>
        </table>
    </form>
</body>
</html>
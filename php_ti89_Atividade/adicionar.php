<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar novo produto</title>
    <style>
        fieldset{width: 200px; display: flex; margin: auto; background-color: white;}
        body{background-color: #e3e3e3;}
        a{
            background-color: blue; color: white; padding: 10px; text-align: center;
            border: 1px solid; border-color: black; text-decoration: none;
        }
        a:hover{background-color: white; color: blue;}
    </style>
</head>
<body>
    <fieldset>
        <form action="" method="post">
            <table width="25%" border="0">
                <tr>
                    <td>Produto:</td>
                    <td><input type="text" name="txtnome" maxlength="100" placeholder="Nome o produto"></td>
                </tr>
                <tr>
                    <td>Entregar:</td>
                    <td><input type="text" name="txtdata" maxlength="10" placeholder="Ex: 12/12/2020"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Adicionar"></td>
                </tr>
            </table>
        </form><br>
        <a href="index.php">Voltar a tabelas</a><br><br>
    </fieldset>
    <?php
        if(isset($_POST['Submit'])){
            $nome = $_POST['txtnome'];
            $data = $_POST['txtdata'];
            //var_dump($nome,$data);
            //echo$nome,$data;
            include_once 'conexao.php';
            $result = mysqli_query($conn,"INSERT INTO produto(idProduto,nome,dataProduto) VALUE(null,'$nome','$data')");
            if($result){
                header('location:index.php?Sucesso na gravação');
                //echo "Registro gravado com sucesso.";
            }else{
                header('location:index.php?Erro na gravação');
                /*echo "[ERRO] registro não foi gravado.";*/
            }
        }
    ?>
</body>
</html>
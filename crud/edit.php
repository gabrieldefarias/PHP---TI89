<?php
    // adicionar o arquivo de conexao
    include_once 'conexao.php';

    if (isset($_POST['update'])){
        $id   =$_POST['id'];
        $nome =$_POST['txtnome'];
        $email= $_POST['txtemail'];
        $telefone=$_POST['txttelefone'];
        //update
        $result = mysqli_query($conn,"UPDATE usuario set nome='$nome',email='$email',celular='$telefone' where id=$id");
        if($result){
            header('location:index.php');
        }
    }
?>

<?php
    //retornar a linha de uma registro especifico
    $id = $_GET['id'];
    //$id=1;
    $result = mysqli_query($conn,"SELECT * from usuario where id ='$id'");
    //trabalhar o resultado em forma de array
    while ($dados = mysqli_fetch_array($result)){
        $nome = $dados['nome'];
        $email = $dados['email'];
        $telefone =$dados['celular'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuário</title>
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
        <table  border="0">
            <tr>
            <td>Nome:</td>
            <td><input type="text" name="txtnome" value=<?php echo $nome; ?> ></td>
            </tr>

            <tr>
            <td>Email:</td>
            <td><input type="text" name="txtemail" value=<?php echo $email; ?> ></td>
            </tr>

            <tr>
            <td>Telefone:</td>
            <td><input type="text" name="txttelefone" value=<?php echo $telefone; ?> ></td>
            </tr>

            <tr>
            <td></td>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?> ></td>
            <td><input type="submit" name="update" value="Alterar"></td>
            </tr>
        </table>
    </form>
</body>
</html>
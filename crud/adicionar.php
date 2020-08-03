<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar novo usuário</title>
    <style>
        fieldset{width: 200px; display: flex; margin: auto; color: blue; background-color: white}
        body{background-color: #e3e3e3;}
        a{
            background-color: blue; color: white; padding: 10px; text-align: center;
            border: 1px solid; border-color: black; text-decoration: none;
        }
        a:hover{background-color: white; color: blue;}
    </style>
</head>
<body>
    <!--Adicionar formulario-->
    <fieldset>
        <form action="" method="post">
            <table width="25%" border="0">
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="txtnome" maxlength="100"></td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td><input type="text" name="txtemail" maxlength="100"></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td><input type="text" name="txttelefone" maxlength="20"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Adicionar"></td>
                </tr>
            </table>
        </form>
        <a href="index.php">Ir para o index</a> <br><br>
    </fieldset>
    <?php
        //Se o botão foi precionado
        if(isset($_POST['Submit'])){
            $nome  = $_POST['txtnome'];
            $email  = $_POST['txtemail'];
            $telefone  = $_POST['txttelefone'];
            //var_dump($nome, $email, $telefone);
            //echo $nome,$email,$telefone;

            include_once 'conexao.php';
            $result = mysqli_query($conn, "INSERT INTO usuario(id,nome,email,celular) VALUES(null,'$nome','$email','$telefone')");
            if($result){
                //echo "Registro gravado com sucesso";
                header('location:index.php? Sucesso na gravação');
            }else{
                //echo "Problema ao gravar o registro";
                header('location:index.php? Erro na gravação');
            }
        }
    ?>
</body>
</html>
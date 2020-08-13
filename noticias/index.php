<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de noticias</title>
    <style>
        fieldset{width: 300px; margin: 5px auto;}
        h2{font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 20px; color: red;}

    </style>
</head>
<body>
    <fieldset>
        <form action="mensagem.php" method="POST">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="txt_nome"></td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td><input type="text" name="txt_email"></td>
                </tr>
                <tr>
                    <td>Mensagem:</td>
                    <td><textarea name="txt_mensagem" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="cadastrar" value="Cadastrar"></td>
                </tr>
            </table>
        </form>
    </fieldset>
    <hr>
    <h2>Lista de comentários</h2>
    <?php
        header('content-type:text/html;charset=utf-8');
        include_once 'conexao.php';
        $sql = mysqli_query($conn,"SELECT * FROM tb_mensagem ORDER BY dtcad desc");
        while ($exibir = mysqli_fetch_array($sql)){
            $nome = $exibir['nome'];
            $email = $exibir['email'];
            $data = $exibir['dtcad'];
            $msg = $exibir['mensagem'];

            echo "<strong>Nome: $nome</strong>"."<br>";
            echo "<strong>Data e Hora: $data</strong>"."<br>";
            echo "<strong>Email: $email</strong>"."<br>";
            echo "<strong>Mensagem: $msg</strong>"."<br><hr>";
        }
    ?>
</body>
</html>
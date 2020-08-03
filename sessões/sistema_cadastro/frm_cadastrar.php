<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cadastro</title>
    <style>
        fieldset{width: 300px; margin: auto; border-radius: 10px; border-color: red;}
    </style>
</head>
<body>
    <fieldset>
        <form action="inserir.php" method="POST">
            <label>Nome:</label><br>
            <input type="text" name="txt_nome"><br>
            <label>E-mail:</label><br>
            <input type="text" name="txt_email"><br>
            <label>Login:</label><br>
            <input type="text" name="txt_login"><br>
            <label>Senha:</label><br>
            <input type="text" name="txt_senha"><br><br>
            <input type="submit" name="Inserir" value="Inserir">
        </form>
    </fieldset>
</body>
</html>
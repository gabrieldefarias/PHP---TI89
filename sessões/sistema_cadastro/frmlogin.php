<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar usuário</title>
</head>
<body>
    <form action="op_login.php" method="POST">
        <label for="">Usuário:</label><br>
        <input type="text" name="txt_usuario" maxlength="50"><br>
        <label for="">Senha:</label><br>
        <input type="password" name="txt_senha" maxlength="50"><br><br>
        <input type="submit" name="logar" value="Logar">
    </form>
</body>
</html>
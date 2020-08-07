<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
    <style>
        fieldset{width: 200px; display: flex; margin: auto;}
    </style>
</head>
<body>
    <!--Adicionar formulário-->
    <fieldset>
    <form action="inclusao.php" method="POST">
        <table width="25%" border="0">
            <tr>
                <td>Data:</td>
                <td><input type="type" name="txt_data" maxlength="100" placeholder="99-99-9999"></td>
            </tr>
                <td><input type="submit" name="Submit" value="Adicionar"></td>
            </tr>
        </table>
    </form> 
</body>
</html>
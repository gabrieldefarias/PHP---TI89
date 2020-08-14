<?php include_once 'conexao.php' ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel de Acesso</title>
    <style>
        fieldset{width: 200px; border-radius: 10px; margin: 0 auto;}
    </style>
</head>
<body>
    <fieldset>
        <form action="cad_usuario.php" method="POST">
            Nome: <input type="text" name="txt_nome_usuario" placeholder="Digite seu Nome"><br><br>
            E-mail: <input type="text" name="txt_email_usuario" placeholder="Informe seu email"><br><br>
            Senha: <input type="text" name="txt_senha_usuario" placeholder="Digite sua senha"><br><br> 
            Niveis de Acesso:
                <select name="select_niveis">
                <option>Selecione</option>
                    <?php
                    $result_niveis_acesso="SELECT * FROM niveis_acesso";
                    $resultado = mysqli_query($conn,$result_niveis_acesso);
                    while($rows = mysqli_fetch_array($resultado)){ ?>
                    <option value="<?php echo $rows['id'];?>">
                                    <?php echo $rows['nome'];?>
                    </option>
                    <?php } ?>
            </select><br><br>
            <input type="submit" name="submit" value="Cadastrar">
        </form>
    </fieldset>
</body>
</html>
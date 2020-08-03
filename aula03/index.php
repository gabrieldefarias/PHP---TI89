<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz</title>
    <style>
        body{
            background-color: #e3e3e3;
        }
        fieldset{
            width: 200px;
            border-radius: 10px;
            border: 2px solid blue;
            margin: auto;
            color: blue;
            background-color: white;
        }
        h1{
            font-size: 13pt;
        }
    </style>
</head>
<body>
    <fieldset>
        <h1>Cálculo da Raiz quadrada</h1>
        <form action="" method="POST">
            <label for="">Valor de A: </label>
            <input type="text" name="txta" size="10"> <br><br>
            <label for="">Valor de B: </label>
            <input type="text" name="txtb" size="10"> <br><br>
            <label for="">Valor de C: </label>
            <input type="text" name="txtc" size="10"> <br><br>
            <button type="submit">Processar</button> <br><br>
        </form>
        <?php echo 'Resultado final:'; ?> <br><br>
        <?php include 'raiz.php'; ?>
    </fieldset>
</body>
</html>
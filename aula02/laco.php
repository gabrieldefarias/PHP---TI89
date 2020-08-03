<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        fieldset{
            width: 200px;
            border-radius: 10px;
            border: 2px solid green;
            margin: auto;
        }
    </style>
</head>
<body>
    <fieldset>
        <form action="" method="post">
            <label for="">Escolha um fator</label> <br><br>
            <input type="text" name="txtfator" size="5" maxlength="5" required> <br><br>
            <button typr="submit">Executar</button> <br><br>
        </form>
        <?php
            /*
                >  maior que
                >= maior ou igual que
                <  menor que
                <= menor ou igual que
                <> diferente que
            */
            // Pegar o valor da input chamada txtfator
            //$fator = $_POST ['txtfator'];
            $txtfator = $_POST['txtfator'];
            //echo
            //if(empty($txtfator)){
            //    echo "Selecionar um fator para a tabuada";
            //    return;
            //}
            $x=1;
            while($x<=10){
                echo $x . " X " . $txtfator . " = " . ($x * $txtfator) . "<br>";
                $x++;
            }
        ?>
    </fieldset>
</body>
</html>
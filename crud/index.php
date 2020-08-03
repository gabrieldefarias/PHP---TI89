<?php
    //usar o arquivo de conecção
    include_once 'conexao.php';
    /*guardar em uma variavel o select da tabela usuario
    // funcao que recebe dois parametros, sendo os parametros
    da conexao ($conn,query($result)) 
    mysqli_query()
    */
    $result =mysqli_query($conn,"SELECT * FROM usuario");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        td{padding: 5px;}
        .foi a{
            padding: 10px; background-color: blue; color: white; border: 1px solid;
            text-decoration: none; border-color: black; margin-left: 20px;
        }
        .foi a:hover{color: blue; background-color: white;}
        a:hover{color: red;}
        body{background-color: #e3e3e3;}
        table{background-color: white; margin-left: 20px;}
        form{margin-left: 20px;}
    </style>
    <title>Sistema CRUD</title>
</head>
<body>
    <?php
        include_once 'conexao.php';
        $parametro = filter_input(INPUT_GET,'parametro');
        if($parametro){
            $result = mysqli_query($conn,"SELECT * FROM usuario where nome like '%$parametro%'");
        }else{
            $result = mysqli_query($conn,"SELECT * FROM usuario");
        }
    ?>
    <p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="parametro">
            <input type="submit" value="Buscar">
        </form>
    </p>

    <p class="foi">
        <a href="adicionar.php">Adicionar novo usuário</a>
    </p>
    <!-- Adicionar uma tabela -->
    <table border="1" width="70%">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Telefone</td>
            <td colspan="2" align="center">Ação</td>
        </tr>
        <!-- Listar os dados da tabela-->
        <?php
            //estrutura de laço - while
            //funcao de array - mysqli_fetch_array() 
            while($dados = mysqli_fetch_array($result)){
                //segunda linha da tabela
                echo "<tr>";
                    echo "<td>" .$dados['id'] ."</td>";
                    echo "<td>" .$dados['nome'] ."</td>";
                    echo "<td>" .$dados['email'] ."</td>";
                    echo "<td>" .$dados['celular'] ."</td>";
                    echo "<td> <a href='edit.php?id=$dados[id]'><i class='fa fa-pencil-square-o' aria-hidden='true '></i></a>" ."</td>";
                    echo "<td> <a href='delete.php?id=$dados[id]'><i class='fa fa-trash' aria-hidden='true'></i></a>" ."</td>";
                echo "</tr>";
            }; 
        ?>
    </table>
</body>
</html>
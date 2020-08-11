<?php
    /*
        criar um array de páginas,indice se inicia com valor 0
        $paginas = ['home','sobre','contato'];
                        0       1       2
                        key(chave) passar valores
    */
   $paginas = ['home'=>'Estou na página home','sobre'=>'Página Sobre!!!!','contato'=>'<input type="text" placeholder="Digite seu nome"/>','FAQ'=>'Perguntas frequentes','Fale conosco'=>'Entre em contato conosco'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página dinamica</title>
    <style>
        *{margin: 0; padding: 0;box-sizing: border-box;}
        header{background-color: black; padding: 8px 10px; text-align: center;}
        a{display: inline-block; margin: 0px 10px; color: white; font-size: 17px; text-decoration: none;}
        a:hover{color: blue;}
        section{max-width: 960px; margin: 20px auto; padding: 0 2%;}
        h2{background-color: black; color: white; padding: 8px 10px;}
    </style>
</head>
<body>
    <header>
        <!-- Pegar os itens da matriz -->
        <?php
        // Uma função, para transformar a primeira letra em maiusculo
        // Função: ucfirst()
            foreach ($paginas as $key => $value){
                echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';
            }
        ?>
    </header>
    <section>
        <h2>
            <?php
                if(isset($_GET['page'])){
                    $pagina = $_GET['page'];
                }else{
                    $pagina = 'home';
                }
                // Usando a função: array_key_exists()
                if(!array_key_exists($pagina,$paginas)){
                    $pagina = 'home';
                }
                //echo ucfirst($pagina);
            ?>
        </h2>
        <?php echo $paginas[$pagina] ?>
    </section>
</body>
</html>
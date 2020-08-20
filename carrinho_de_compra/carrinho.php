<?php session_start(); 
    if (!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] =array();
    }
    //adiconar produtos
    if(isset($_GET['acao'])){
        //adicionar carrinho
        if ($_GET['acao'] == 'add'){
            $id = intval($_GET['id']);
            if(!isset($_SESSION['carrinho'] [$id])){
                $_SESSION['carrinho'] [$id] = 1 ;
            }else {
                $_SESSION['carrinho'] [$id] +=1;
            }
        }
    }
    // remover carrinho
    if($_GET['acao'] == 'del'){
        $id = intval($_GET['id']);
        if(isset($_SESSION['carrinho'] [$id])){
            unset( $_SESSION['carrinho'] [$id]);
        }
    }
    //alterar quantidade
    if($_GET['acao'] =='up'){
        if(is_array($_POST['prod'])){
            foreach ($_POST['prod'] as $id => $qtd) {
            $id = intval($id);
            $qtd = intval($qtd);
            if(!empty($qtd) || $qtd <>0){
                $_SESSION['carrinho'][$id] = $qtd;
            }else{
                unset($_SESSION['carrinho'][$id]);
            }
        }
    }
}
//print_r ($_SESSION['carrinho']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compra</title>
    <style>
        table{margin: 0px 100px; border: 1px solid;}
        caption{color: blue;}
    </style>
</head>
<body>
    <table>
        <caption>Carrinho de Compra</caption>
        <thead>
        <tr>
            <th width="240">Produto</th>
            <th width="73">Quantidade</th>
            <th width="89">Preço</th>
            <th width="100">SubTotal</th>
            <th width="64">Remover</th>
        </tr>
        </thead>
        <form action="?acao=up" method="post">
            <tfoot>
                <tr>
                    <td colspan="5"><input type="submit" value="Atualizar Carrinho" /></td>
                </tr>
                <td colspan="5"><a href="index.php">Continuar Comprando</a></td>
            </tfoot>
            <tbody>
                <?php
                    header('Content-type:text/html;charset=utf-8');
                    include_once 'conexao.php';
                    if (count($_SESSION['carrinho']) ==0) {
                        echo '<tr><td colspan="5">N]ao há produtos no carrinho</td></tr>';
                    }else{
                        $total =0;
                        foreach ($_SESSION['carrinho'] as $id => $qtd){
                            $sql = "SELECT * FROM produtos WHERE id = '$id'";
                            $qr = mysqli_query($cnn,$sql);
                            $ln = mysqli_fetch_assoc($qr);

                            $nome = utf8_encode($ln['nome']);
                            $preco = number_format($ln['preco'],2);
                            $sub = number_format($ln['preco']* $qtd,2);

                            $total += $sub; 
                            echo '<tr>
                                <td>'.$nome.'</td>
                                <td><input type="text" size="3" name="prod['.$id.']" value="' .$qtd.'"</td>
                                <td>R$ '.$preco. '</td>
                                <td>R$ '.$sub.'</td>
                                <td><a href="?acao=del&id='.$id.'">Remove</a></td>
                            </tr>';
                            //echo 'R$' . number_format($num, 2, ',', '.'); // retorna R$100.000,50
                            $total = number_format($total,2);
                        }   
                        echo '<tr>
                            <td colspan="5">Total</td>
                            <td>RS '.$total.'</td>
                        </tr>';
                    }
                ?>
            </tbody>
        </form>
    </table>
</body>
</html>
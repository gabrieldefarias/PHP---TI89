<?php
    /*
        Equação de 2º grau
        Função interna sqrt() , extrai a raiz quadrada de um número
        (ax * ax) + ax + c = 0
        x1, x2

        1. Qunado delta for maior que zero, teremos duas raizes reais diferentes

        2. Quando delta for igual a zero, teremos duas raizes reais identicas

        3. Quando delta for menor que zero, não existe raizes
    */
    
    $a = $_POST['txta'];
    $b = $_POST['txtb'];
    $c = $_POST['txtc'];
    $delta = 0;
    $x1 = 0;
    $x2 = 0;

    //pow elevar número ao quadrado
    //$delta =pow ($b,2) - (4*$a*$c);
    $delta = ($b*$b) - (4*$a*$c);
    //echo $delta . "<br>";
    //echo sqrt($delta);
    if($delta > 0){
        // Encontrar as duas raizes
        $x1 = (-$b + sqrt($delta)) / (2*$a);
        $x2 = (-$b - sqrt($delta)) / (2*$a);
        echo $x1, $x2;
    }elseif($delta == 0){
        $x1 = (-$b + sqrt($delta)) / (2*$a);
        $x2 = $x1;
        echo $x1, $x2;
    }elseif($delta < 0){
        echo "Não existem raizes reais";
    }
?>
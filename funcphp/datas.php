<?php
    date_default_timezone_set('America/Sao_Paulo');
    echo "Trabalhando com datas no php";
    $atual = new DateTime(); //Classe de data
    $especifica = new DateTime('1995-05-20');
    $um_mes = new DateTime('+1 month');

    echo "<br>";
    print_r($atual);
    echo "<br>";
    print_r($especifica);
    echo "<br>";
    print_r($um_mes);

    $data = new DateTime(); // Criar um objeto do tipo datetime
    /* [DATE] 2020-08-03 10-20-30.454545 */     /* Public format ( string $format ) : string */
    echo "<br>";
    echo $data->format('d/m/Y H:i:s');
    $data = new DateTime('-6 year');
    echo "<br>";
    echo $data->format('d/m/Y H:i:s');

    echo "<br><br>";

    $datasistema = new DateTime();
    $dataNascimento = new DateTime('2000-05-23');
    $intervalo =  $dataNascimento->diff($datasistema);
    echo $intervalo->format('%y anos, %m meses e %d dias as %h horas e %i minutos');

    echo "<br><br>";

    $intervalo1 = new DateInterval('P6Y');
    echo $intervalo1->format('%y anos e %d dias');
    // 6 anos e 0 dias

    echo "<br><br>";
    
    $intervalo1 = new DateInterval('P2Y4DT6H8M');
    echo $intervalo1->format('%h horas');
    
    echo "<br>";

    $novadata = new DateTime();
    $novadata->setTimezone(new DateTimezone('America/Sao_Paulo'));
    echo "<br>";
    print_r($novadata);

    echo "<br><br>";
    $data = new dateTime();
    echo "Precisa ter 6 anos ou mais para fazer a matricula.<br>";
    if($data->format('Y') >= 2007){
        echo "O aluno tem 6 anos ou mais e pode fazer a matricula.";
    }else{
        echo "O aluno nao tem 6 anos ou mais e nao pode fazer a matricula.";
    }
?>
<?php
    header('conten-_type:text/html;charset=utf-8');
    echo "<a href=\"principal.php\">link1</a>";
    echo "<a href=\"principal.php?a=pagina2.php\">link2</a>";
    echo "<a href=\"principal.php?a=pagina3.php\">link3</a>";

    @$pagina = $_GET['a'];
    if(isset($pagina)){
        include $pagina;
    }else{
        echo "<br>"."Bem vindo a página principal"."<br>";
        echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, blanditiis?";
    }
?>
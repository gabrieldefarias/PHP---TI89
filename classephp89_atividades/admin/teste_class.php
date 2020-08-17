<?php
require_once("../config.php");


//$adm = new Administrador('Eduardo', 'dudu@mobi.le','dudu','123456');
//$adm->insert();

$admins = Administrador::getList();
foreach ($admins as $admin){
    echo $admin['id']." - ".$admin['nome']." - ".$admin['senha']."<br>";
}

$adm = new Administrador();
$adm->efetuarLogin('dudu','123456');
echo $adm->getNome();



?>
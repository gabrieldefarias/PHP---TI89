<?php

//inicializar a sessão de usuário
if (!isset($_SESSION)){
    session_start();
}

//definindo padrão de Zona GMT (TimeZone) -3,00
date_default_timezone_set('America/Sao_Paulo');

//inicia carregamento das classes do projeto
spl_autoload_register(function($nome_classe){
    $nome_arquivo = "class".DIRECTORY_SEPARATOR.$nome_classe.".php";
    if(file_exists($nome_arquivo)){
        require_once($nome_arquivo);
    }
});

//Criar constantes do servidor de banco de dados
define ('IP_SERVER_DB', 'ca109-pl.valueserver.net');
define ('HOSTNAME','SEUPCDECASA');
define ('NOME_BANCO','dinamico85db');
define ('USER_DB','wellington_89db');
define ('PASS_DB','6n9mAw5@');
define ('LARGURA_IMG',640);
?>
<?php
    class SqlSenac extends PDO{    // extends = herança - PDO
        private $cn;          // atributo da classe Sql
        public function __construct(){
        $this->cn = new PDO("mysql:host=127.0.0.1;dbname=db_cadastro","root","");
        }
        public function setParams($comando, $parametros = array()){
            foreach($parametros as $key => $value){
                $this->setParam($comando, $key, $value);
            }
        }
        public function setParam($cmd, $key, $value){
            $cmd->bindParam($key, $value); // Agrupa parametros
        }
        // design partners - 
        public function query($comandoSql, $params = array()){
            $cmd = $this->cn->prepare($comandoSql);
            $this->setParams($comandoSql, $params);
            $cmd->execute();
        }
        public function select($comandoSql, $params = array()){
            $cmds = $this->query($comandoSql, $params);
            return $cmds->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>
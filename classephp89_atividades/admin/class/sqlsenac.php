<?php
class SqlSenac extends PDO{
    private $cn;
    public function __construct(){
        $this->cn = new PDO("mysql:host=ca109-pl.valueserver.net;dbname=wellington_89db","aluno_iton","6n9mAw5@");
    }
    // método atribui parametroS para uma query sql
    public function setParams($comando, $parametros = array()){
        foreach($parametros as $key => $value){
            $this->setParam($comando,$key,$value);
        }
    }
    // = (atribuição)| == (comparação)| === (comparção absoluta) | => associação | -> propriedade
    public function setParam($cmd,$key,$value){
        $cmd->bindParam($key, $value);
    }
    public function query($comandoSql, $params = array()){
        $cmd = $this->cn->prepare($comandoSql);
        $this->setParams($cmd, $params);
        $cmd->execute();
        return $cmd;
    }
    public function select($comandoSql,$params = array()){
        $cmd = $this->query($comandoSql,$params);
        return $cmd->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
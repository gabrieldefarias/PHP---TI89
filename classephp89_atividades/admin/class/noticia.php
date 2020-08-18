<?php
    class Categoria{
    // Baseado na classe administrador, implemente esta classe de acordo com o banco de dados
        private $id;
        private $nome;
        private $situacao;

        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($value){
            $this->nome = $value;
        }
        public function getSituacao(){
            return $this->situacao;
        }
        public function setSituacao($value){
            $this->situacao = $value;
        }
        public function loadById($_id){
            $sql = new SqlSenac();
            $results = $sql->select("SELECT * FROM categoria WHERE id = :id",array(':id'=>$_id));
            if (count($results)>0) {
                $this->setData($results[0]);
            }
        }
        public static function getList(){
            $sql = new SqlSenac();
            return $sql->select("SELECT * FROM categoria order by nome");
        }
        public function setData($dados){ 
            $this->setId($dados['id']);
            $this->setNome($dados['nome']);
            $this->setSitucao($dados['Situacao']);
        }
        public function insert(){
            $sql = new SqlSenac();
            $results = $sql->select("CALL sp_cat_insert(:nome, :Situacao)",
                array(
                    ":nome"=>$this->getNome(),
                    ":situacao"=>$this->getSituacao(),
                ));
            if (count($results)>0) {
                $this->setData($results[0]);
            }
        }
        public function update($_id, $_nome, $_situacao){
            $sql = new SqlSenac();
            $sql->query("UPDATE categoria SET nome = :nome, situacao = :situacao 
                WHERE id = :id",
                array(
                    ":id"=>$_id,
                    ":nome"=> $_nome,
                    ":situacao"=>$_situacao
                )
            );
        }
        public function delete(){
            $sql = new SqlSenac();
            $sql->query("DELETE FROM categoria WHERE id = :id",array(":id"=>$this->getId()));
        }
    }
?>
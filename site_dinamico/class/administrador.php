<?php
    // Nome da classe
    class Administrador{
        /* Atributos */   /* Métodos de construtores */   /* Métodos da classe - análise */
        /* Métodos de acesso (get(recuperar); set(atribuir);) */
        /* obterid() inserir() */
        private $id;
        private $nome;
        private $email;
        private $login;
        private $senha;
        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->$id = $value;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($value){
            $this->$id = $value;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($value){
            $this->$id = $value;
        }
        public function getLogin(){
            return $this->login;
        }
        public function setLogin($value){
            $this->$id = $value;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($value){
            $this->$id = $value;
        }
        public function loadById($id){
            $sql = new SqlSenac();
            $resultados = 
                $sql->select("SELECT * FROM tb_administrador WHERE id  = :id",
                array(':id'=>$id));
            if(count($resultados)>0){
                $this->setData($resultados[0]);
            }
        }
    }
?>
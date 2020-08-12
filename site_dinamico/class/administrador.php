<?php
    // Nome da classe
    class Administrador{
        /* Atributos */   /* Métodos de construtores */   /* Métodos da classe - análise */
        /* Métodos de acesso (get(recuperar); set(atribuir);) */
        /* obterid() inserir() */
        private $id; // Privado
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
                $this->setData($resultados[0]); // ???????
            }
        }
        public static function getList(){ // Assinatura do método >> sobrecarga de métodos
            $sql = new SqlSenac();
            return $sql->select("SELECT * FROM tb_administrador ORDER BY nome");
        }
        public static function search($nome_adm){
            $sql = new SqlSenac();
            return $sql->select("SELECT * FROM tb_administrador WHERE nome LIKE :nome",
                array(":nome"=>"%".$nome_adm."%"));
        }
        public function efetuarLogin($login, $senha){
            $sql = new SqlSenac();
            $semha_cript = md5($senha);
            $resultado = $sql->select("SELECT * FROM administrador
                WHERE login = :login AND senha = :senha",
                array(":login"=>$login,":senha"=>$senha_cript));
            if(count($resultado)>0){
                $this->setData($resultado[0]);
            }
        }
        public function setData($dados){
            $this->setId(dados['id']);
            $this->setNome(dados['nome']);
            $this->setEmail(dados['email']);
            $this->setLogin(dados['login']);
            $this->setSenha(dados['senha']);
        }
    }
?>
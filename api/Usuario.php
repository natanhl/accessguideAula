<?php

class Usuario {
    
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $status;
    private $pne;
    
    protected function getId() {
        return $this->id;
    }
    
    private function setId($id) {
        $this->id = $id;
    }
    
    protected function getNome() {
        return $this->nome;
    }
    
    private function setNome($nome) {
        $this->nome = $nome;
    }
    
    protected function getEmail() {
        return $this->email;
    }
    
    private function setEmail($email) {
        $this->email = $email;
    }
    
    protected function getSenha() {
        return $this->senha;
    }
    
    private function setSenha($senha) {
        $this->senha = $senha;
    }
    
    protected function getStatus() {
        return $this->status;
    }
    
    private function setStatus($status) {
        $this->status = $status;
    }
    
    protected function getPne() {
        return $this->pne;
    }
    
    private function setPne($pne) {
        $this->pne = $pne;
    }
    
    public function consultar($id) {
        
        $this->setId($id);
        
        try {

            
        } catch (Exception $error) {
            
            return array(
                "status" => false,
                "code" => $error->getCode()
                "message" => $error->getMessage()
            );
        }
    }
    
    public function cadastrar($id, $dados) {
        
        $this->setId($id);
        $this->setNome($dados["usuario"]["nome"]);
        $this->setEmail($dados["usuario"]["email"]);
        $this->setPne($dados["usuario"]["pne"]);
        
        try {

            
        } catch (Exception $error) {
            
            return array(
                "status" => false,
                "code" => $error->getCode()
                "message" => $error->getMessage()
            );
        }
    }
    
    public function atualizar($id, $dados) {
        
        $this->setId($id);
        $this->setNome($dados["usuario"]["nome"]);
        $this->setEmail($dados["usuario"]["email"]);
        $this->setPne($dados["usuario"]["pne"])
        
        try {

            
        } catch (Exception $error) {
            
            return array(
                "status" => false,
                "code" => $error->getCode()
                "message" => $error->getMessage()
            );
        }
    }
}

?>
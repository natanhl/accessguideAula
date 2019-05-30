<?php

class Senha extends Usuario {
    
    private $nova_senha;
    
    private function getNovaSenha() {
        return $this->nova_senha;
    }
    
    private function setNovaSenha($nova_senha) {
        $this->nova_senha = $nova_senha;
    }
    
    public function restaurar($email_usuario) {
        
        try {
            
            
        } catch (Exception $error) {
            
            return array(
                "status" => false,
                "code" => $error->getCode()
                "message" => $error->getMessage()
            );
        }
    }
    
    public function atualizar($id_usuario, $nova_senha) {
        
        $this->setNovaSenha($nova_senha);
        
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
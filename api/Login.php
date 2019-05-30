<?php

class Login extends Usuario {
    
    public function acessar($email_usuario, $senha_usuario) {
        
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
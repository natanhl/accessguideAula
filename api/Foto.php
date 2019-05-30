<?php

class Foto extends Estabelecimento {
    
    private $id;
    private $arquivo;
    
    private function getId() {
        return $this->id;
    }
    
    private function setId($id) {
        $this->id = $id;
    }
    
    private function getArquivo() {
        return $this->arquivo;
    }
    
    private function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
    }

    public function consultar($estabelecimento) {
        
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
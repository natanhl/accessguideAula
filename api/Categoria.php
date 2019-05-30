<?php

class Categoria extends Estabelecimento {
    
    private $id;
    private $categoria;
    private $status;
    
    private function getId() {
        return $this->id;
    }
    
    private function setId($id) {
        $this->id = $id;
    }
    
    private function getCategoria() {
        return $this->categoria;
    }
    
    private function setCategoria($categoria) {
        $this->categoria = $categoria;
    }
    
    private function getStatus() {
        return $this->status;
    }
    
    private function setStatus($status) {
        $this->status = $status;
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
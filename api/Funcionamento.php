<?php

class Funcionamento extends Estabelecimento {
    
    private $id;
    private $dia;
    private $inicio;
    private $fim;
    
    private function getId() {
        return $this->id;
    }
    
    private function setId($id) {
        $this->id = $id;
    }
    
    private function getDia() {
        return $this->dia;
    }
    
    private function setDia($dia) {
        $this->dia = $dia;
    }
    
    private function getInicio() {
        return $this->inicio;
    }
    
    private function setInicio($inicio) {
        $this->inicio = $inicio;
    }
    
    private function getFim() {
        return $this->fim;
    }
    
    private function setFim($fim) {
        $this->fim = $fim;
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
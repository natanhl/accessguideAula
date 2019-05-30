<?php

class Estabelecimento {
    
    private $id;
    private $nome;
    private $endereco;
    private $cidade;
    private $estado;
    private $cep;
    private $geolocalizacao;
    private $status;
    
    protected function getId() {
        return $this->id;
    }
    
    private function setId($id) {
        $this->id = $id;
    }
    
    private function getNome() {
        return $this->nome;
    }
    
    private function setNome($nome) {
        $this->nome = $nome;
    }
    
    private function getEndereco() {
        return $this->endereco;
    }
    
    private function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    
    private function getCidade() {
        return $this->cidade;
    }
    
    private function setCidade($cidade) {
        $this->cidade = $cidade;
    }
    
    private function getEstado() {
        return $this->estado;
    }
    
    private function setEstado($estado) {
        $this->estado = $estado;
    }
    
    private function getCep() {
        return $this->cep;
    }
    
    private function setCep($cep) {
        $this->cep = $cep;
    }
    
    private function getGeolocalizacao() {
        return $this->geolocalizacao;
    }
    
    private function setGeolocalizacao($geolocalizacao) {
        $this->geolocalizacao = $geolocalizacao;
    }
    
    private function getStatus() {
        return $this->status;
    }
    
    private function setStatus($status) {
        $this->status = $status;
    }
    
    public function consultar($id = null) {
        
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
}

?>
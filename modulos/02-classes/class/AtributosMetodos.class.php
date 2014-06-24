<?php


class AtributosMetodos{
    
    var $Nome;
    var $Idade;
    var $Profissao;
    
    function setUsuario($Nome, $Idade, $Profissao){
        
        $this->Nome = $Nome;
        $this->setIdade($Idade);
        $this->Profissao = $Profissao;
        
        
    }
    
    function getUsuario(){
        
        return "{$this->Nome} tem {$this->Idade} anos de idade. E trabalha como {$this->Profissao}";
        
    }
    
    function getClass(){
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
    
    function setIdade($Idade) {
        if (!is_int($Idade)) {
            die("Idade informada é incorreta!");
        }else{
            return $this->Idade = $Idade;
        }
    }
    
    
    function Envelhecer(){
        $this->Idade = $this->Idade + 1;
    }
        
   
}

<?php

class AcessoProtegido {
    
    public $Nome;
    protected $Email;
    
    
     function __construct($Nome, $Email) {
        $this->Nome = $Nome;
        $this->Email = $this->setEmail($Email);
    }

    public function setEmail($Email) {
        if (!filter_var($Email,FILTER_VALIDATE_EMAIL)) {
            die("Email Inválido");
        }else{
            $this->Email = $Email;
        }
    }
    
    protected function setNome($Nome) {
        $this->Nome = $Nome;
    }
    
    
}


class AcessoProtegidoFilha extends AcessoProtegido{
    
    protected $cpf;
    
 
    
    public function AddCpf($Nome, $Cpf) {
        parent::setNome($Nome);
        $this->cpf = $Cpf;
    }
    
}

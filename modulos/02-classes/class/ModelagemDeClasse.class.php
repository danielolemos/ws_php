<?php

/**
 * ModelagemDeClasse.class.php[ TIPO ]
 * Descricao
 * @copyright (c) year, Daniel Lemos - DOM WebService
 */
class ModelagemDeClasse {
    
    public $Nome;
    public $Idade;
    public $Profissao;
    public $ContaSalario;
    
    public function Trabalhar($Trabalho, $Valor){
        $this->ContaSalario += $valor;
        $this->DarEcho("{$this->Nome} Desenvolveu um {$this->ToReal($Valor)}");
    }
    
    
    function __construct($Nome, $Idade, $Profissao, $ContaSalario) {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Profissao = $Profissao;
        $this->ContaSalario = $ContaSalario;
    }
    
    public function setNome($Nome) {
        $this->Nome = $Nome;
    }

    public function setIdade($Idade) {
        $this->Idade = $Idade;
    }

    public function setProfissao($Profissao) {
        $this->Profissao = $Profissao;
    }

    public function setContaSalario($ContaSalario) {
        $this->ContaSalario = $ContaSalario;
    }

        
public function ToReal($Valor)  {
        return number_format($Valor, '2','.',',');
    
}

public function DarEcho($Mensagem) {
    
}
    



    
}

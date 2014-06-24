<?php

/**
 * ComportamentoInicial.class[ TIPO ]
 * Descricao
 * @copyright (c) year, Daniel Lemos - DOM WebService
 */
class ComportamentoInicial {
    
        var $Nome, $Idade, $Profissao, $Salario;
        
        function __construct($Nome, $Idade, $Profissao, $Salario) {
            $this->Nome = (string) $Nome;
            $this->Idade = (int) $Idade;
            $this->Profissao = (string) $Profissao;
            $this->Salario = (float) $Salario;
            echo "O objeto {$this->Nome} foi iniciado";
        }
        
        
        function __destruct() {
            echo "O objeto {$this->Nome} foi detruido.<hr>";
        }
        
        function ver(){
            
            echo "<pre>";
            print_r($this);
            echo "</pre>";
            
        }
        
        
        
        
}

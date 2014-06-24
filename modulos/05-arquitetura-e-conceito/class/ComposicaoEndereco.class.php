<?php

/**
 * ComposicaoEndereco.class[ TIPO ]
 * Descricao
 * @copyright (c) year, Daniel Lemos - DOM WebService
 */
class ComposicaoEndereco {
    
    private $Cidade;
    private $Estado;
    
    function __construct($Cidade, $Estado) {
        $this->Cidade = $Cidade;
        $this->Estado = $Estado;
    }

    public function getCidade() {
        return $this->Cidade;
    }

    public function getEstado() {
        return $this->Estado;
    }


    
}

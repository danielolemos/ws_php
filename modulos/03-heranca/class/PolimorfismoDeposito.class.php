<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PolimorfismoDeposito
 *
 * @author Daniel
 */
class PolimorfismoDeposito extends Polimorfismo{

    public $Desconto;
    
    function __construct($Produto, $Valor) {
        // O PARENT CONSTRUCT DEVE SER A PRIMEIRA LINHA DO CONSTRUTOR
        //QUALQUER ATRIBUTO QUE FOR PASSADO  ACIMA PODERÁ SOFRER UM OVERRIDE.
        parent::__construct($Produto, $Valor);
        $this->Desconto = 15;
        $this->Metodo = "Deposito";
    }
    // PARA MANTER O POLIMORFISMO COM OVERRIDE É NECESSÁRIO MANTER O MÉTODO DA MESMA
    // FORMA DA CLASSE DE ORIGEM (CLASSE HERDADA)
    public function Pagar(){
        $this->Valor = ($this->Valor / 100) * 100 - $this->Desconto;
        parent::Pagar();
    }
    
    
}


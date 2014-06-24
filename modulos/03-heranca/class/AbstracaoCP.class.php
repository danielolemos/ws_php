<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AbstracaoCP
 *
 * @author Daniel
 */
class AbstracaoCP extends AbstracaoCC {
    
    public $Rendimento;
    
    
    function __construct($Cliente, $Saldo) {
        parent::__construct($Cliente, $Saldo, 0);
        $this->Conta = 'Conta Poupança';
        $this->Rendimento = 1.7;
        
    }
    
    final public function Depositar($Valor) {
       $Juro = $Valor * ($this->Rendimento / 100);
       $Deposito = $Valor + $Juro;
       parent::Depositar($Deposito);
       echo "<small style='color:09f;'>Valor do depósito: {$this->Real($Valor)} || Rendimentos: {$this->Real($Juro)} </small>";
    }

    public function VerSaldo() {
        parent::Extrato();
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 
 *
 * @var AssociacaoClientel
 */
class AssociacaoLogin {
    
    public $Cliente;
    private $Login;
    
    function __construct($Cliente) {
        
        if (is_object($Cliente)) {
            
             $this->Cliente = $Cliente;
             $this->Login = true;
            
        }else{
            die('Erro ao Logar');
        }
        
     }
        
     public function getCliente() {
         return $this->Cliente;
     }

          
        public function getLogin(){
            return $this->Login;
        }
    
       
    }

    


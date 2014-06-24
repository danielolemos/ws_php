<?php


class AcessoPrivado {
    
  private $Nome;
  private $Email;
  private $CPF;
  
  function __construct($Nome, $Email, $Cpf) {
      $this->setNome($Nome);
      $this->setEmail($Email);
      $this->setCpf($Cpf);
  }

  public function setNome($Nome) {
      if ($Nome && is_string($Nome)) {
          $this->Nome = $Nome;
      }else{
          die("Erro no Nome");
      }
  }
  
  public function setEmail($Email) {
      if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
          $this->Email = $Email;
      }else{
          die('Erro no e-mail');
      }
  }
  
  public function setCpf($Cpf) {
      if (preg_match('/[0-9]*/i',$Cpf) && strlen($Cpf) == 11) {
          $this->CPF = $Cpf;
      }else{
          die('Erro no CPF');
      }
  }
  
  
  
}

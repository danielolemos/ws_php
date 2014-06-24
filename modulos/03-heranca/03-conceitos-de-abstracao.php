<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
                require("./inc/Config.inc.php");
                
               /* 
                $conta = new Abstracao('Robson V. Leite', 500);
                 $conta2 = new Abstracao('Marcos', 300);  
                
              
                
                $conta->Depositar(1000);
                $conta->Sacar(500);
                $transferir = $conta->Transferir(500, $conta2);
                * 
                */
                
               $cc = new AbstracaoCC('Daniel Lemos', 0,1000000);
               $cp = new AbstracaoCP('Daniel', 0);
               $cc->VerSaldo();
               $cc->Depositar(1000);
               $cc->Sacar(500);
               $cc->Transferir(500, $cp);
               $cc->VerSaldo();
               
               
               $cp->Depositar(1000);
               $cp->Sacar(500);
               $cp->Transferir(500, $cc);
               $cp->VerSaldo();
                
                
                echo '<pre>';
                var_dump($cc, $cp);
                echo '</pre>';
                
                
        ?>
    </body>
</html>

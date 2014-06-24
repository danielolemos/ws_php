<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require "./inc/Config.inc.php";
            
            $daniel  = new AssociacaoCliente("Daniel","daniel.o.lemos@hotmail.com");
            $login = new AssociacaoLogin($daniel);
            
            
            if ($login->getLogin()) {
                echo "Gerenciando o cliente id: {$login->getCliente()->getCliente()}<br>";
                echo "{$login->getCliente()->getNome()} logou com sucesso usando o e-mail {$login->getCliente()->getEmail()}<hr>";
             }
                                
            
            echo '<pre>';
            var_dump($daniel, $login);
            echo '</pre>';
            
        ?>
    </body>
</html>

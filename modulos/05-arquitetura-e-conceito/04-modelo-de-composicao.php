<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require("./inc/Config.inc.php");
            
            $daniel = new ComposicaoUsuario('Daniel Lemos', 'daniel@daniel.com');
            $daniel->CadastrarEndereco('Soledade', 'RS');
          
            echo "O email de {$daniel->Nome} é {$daniel->Email} <br>";
            echo "{$daniel->Nome} mora em {$daniel->getEndereco()->getCidade()}/{$daniel->getEndereco()->getEstado()}";
          
            
            echo '<pre>';
            var_dump($daniel);
            echo '</pre>';
        ?>
    </body>
</html>

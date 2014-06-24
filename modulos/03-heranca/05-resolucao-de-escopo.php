<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require("./inc/Config.inc.php");
            
            $produto = new ResolucaoDeEscopo("Livro de PHP", 59.90);
            $digital = new ResolucaoDeEscopoDigital("Livro de PHP", 39.90);
            
            $produto->Vender();
            $produto->Vender();
            $produto->Vender();
            
            $digital->Vender();
            $digital->Vender();
            
            
            
            ResolucaoDeEscopo::Relatorio();
            
            echo "<pre>";
            var_dump($produto, $digital);
            echo "</pre>";
            
        ?>
    </body>
</html>

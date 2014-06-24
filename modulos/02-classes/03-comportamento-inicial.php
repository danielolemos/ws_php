<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
           <?php
                    require("./class/ComportamentoInicial.class.php");
                    /*
                    $daniel = new ComportamentoInicial();
                    
                    $daniel->Nome = 'Daniel';
                    $daniel->Salario = 'banana';
                    
                    $daniel->ver();
                    */
                    
                    $daniel = new ComportamentoInicial('Daniel', 36, 'Programador', 3600);
                    $marcos = new ComportamentoInicial('Marcosl', 27, 'Programador', 2200);
                    $pedro = new ComportamentoInicial('Pedro',26, 'Programador', 1600);
                    
                    $daniel->ver();
                    $marcos->ver();
                    $pedro->ver();
           ?>
    </body>
</html>

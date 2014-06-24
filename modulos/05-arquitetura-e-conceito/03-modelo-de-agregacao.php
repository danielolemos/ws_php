<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
                    require ("./inc/Config.inc.php");
                    
                    $daniel =  new AssociacaoCliente('Daniel',"daniel.o.lemos@domwebservice.com");
                    
                    $prophp = new AgregacaoProduto('20','ProPHP',334.90);
                    $wsphp = new AgregacaoProduto(22, "WS PHP", 289.90);
                    $wshtml = new AgregacaoProduto(22, 'WS HTML5', 289.90);
                    
                    $outrocurso = new stdClass();
                    $outrocurso->Produto = '23';
                    $outrocurso->Nome = 'Curso de jQuery';
                    $outrocurso->Valor = 400;
                    
                    
                    $carrinho = new AgregacaoCarrinho($daniel);
                    
                    $carrinho->Add($wshtml);
                    $carrinho->Add($wsphp);
                    $carrinho->Add($prophp);
                    
                    $carrinho->Remove($wshtml);
                    $carrinho->Remove($prophp);
                    $carrinho->Add($prophp);
                    
                    
                    echo '<pre>';
                    var_dump($daniel, $prophp, $outrocurso, $carrinho);
                    echo '</pre>';
                    
                    
        ?>
    </body>
</html>

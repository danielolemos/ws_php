<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './_app/Config.inc.php';
        
        $Atual = filter_input(INPUT_GET, 'atual', FILTER_VALIDATE_INT);
        $Pager = new Pager('http://localhost/ws_php/modulos/08-classes-auxiliares/04-gestao-de-resultados.php?atual=', 'Primeira', 'Ùltima');
        $Pager->ExePager($Atual, 1);
        
        $read = new Read;
        $read->ExeRead('ws_categories', 'LIMIT :limit OFFSET :offset', "limit={$Pager->getLimit()}&offset={$Pager->getOffset()}");
        
        echo '<pre>';
        var_dump($Pager, $read->getResult());
        echo '</pre>';
        
        
        $Pager->ExePaginator('ws_categories');
        echo $Pager->getPaginator();
        
        ?>
    </body>
</html>

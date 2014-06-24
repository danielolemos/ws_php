<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './_app/Config.inc.php';
        
        $deleta = new Delete;
        
        
        $deleta->ExeDelete('ws_siteviews_agent', "WHERE agent_id = :id", 'id=21');
        
        if ($deleta->getResult()) {
                echo "{$deleta->getRowCount()} registros removidos com sucesso";
        }
        
 
        ?>
    </body>
</html>

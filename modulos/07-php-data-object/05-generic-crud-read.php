<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
             require './_app/Config.inc.php';
             
             $read = new Read;
             
                
             $read->ExeRead('ws_siteviews_agent', 'WHERE agent_name = :name AND agent_views >= :views LIMIT :limit', "name=firefox&views=10&limit=3");
             $read->setPlaces("name=chrome&views=10&limit=3");
             
             if ($read->getRowCount() >= 1) {
                    echo '<pre>';
                    var_dump($read->getResult());
                    echo '</pre>';
             }
             
             $read->FullRead("SELECT * FROM ws_siteviews_agent LIMIT :limit OFFSET :offset", "limit=3&offset=2");
             echo '<pre>';
             var_dump($read);
             echo '</pre>';
        ?>
    </body>
</html>

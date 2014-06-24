<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
                require "./_app/Config.inc.php";
                
                $dados = ['agent_name' => 'Opera', 'agent_views' => '50'];
                
                $update = new Update;
                
                $update->ExeUpdate('ws_siteviews_agent' , $dados, "WHERE agent_id = :id", 'id=5');
                
                if ($update->getResult()) {
                        
                    echo "{$update->getRowCount()} dados(s) atualizados com sucesso!<hr>";
                    
                 }
                
                echo "<pre>";
                var_dump($update);
                echo "</pre>";
        ?>
    </body>
</html>

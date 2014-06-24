<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
                require './_app/Config.inc.php';
                
                $Conn = new Conn;
                
                try {
                    
                    $Query = "SELECT * FROM  ws_siteviews_agent WHERE agent_name = :name";
                    $Exe = $Conn->getConn()->prepare($Query);
                    
                    $Exe->bindValue(":name", 'Chrome');
                    $Exe->execute();
                    
                    $Chrome = $Exe->fetchAll(PDO::FETCH_ASSOC);
                    
                    $Exe->bindValue(":name", 'Safari');
                    $Exe->execute();
                    
                    $Safari = $Exe->fetchAll(PDO::FETCH_ASSOC);
                    
                    
                    
                } catch (PDOException $e) {
                    
                    PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
                    
                }
                
                if ($Chrome) {
                    echo '<pre>';
                    var_dump($Chrome);
                    echo '</pre>';
                }
                
                
                if ($Safari) {
                    echo '<pre>';
                    var_dump($Safari);
                    echo '</pre>';
                }
                                
                
        ?>
    </body>
</html>

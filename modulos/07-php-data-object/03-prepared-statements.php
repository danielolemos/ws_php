<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require("./_app/Config.inc.php");
            
           $PDO = new Conn;
           
           $name = 'Safari';
           $views ='128';
           
           try {
               
               $QRCreate = "INSERT INTO ws_siteviews_agent (agent_name, agent_views) VALUES (?, ?)";
               $Create = $PDO->getConn()->prepare($QRCreate);
               
               //$Create->bindValue(1, 'Safari', PDO::PARAM_STR);
               //$Create->bindValue(2, '126', PDO::PARAM_INT);
               
               $Create->bindParam(1, $name, PDO::PARAM_STR, 15);
               $Create->bindParam(2, $views, PDO::PARAM_INT, 5);
               
               $Create->execute();
               
                if ($Create->rowCount()) {
                   
                   echo "{$PDO->getConn()->lastInsertId()} - Cadastro com sucesso! <hr>";
                                                    
               }
               
               $QrSelect = "SELECT * FROM ws_siteviews_agent WHERE agent_views >= :visitas";
               $Select  = $PDO->getConn()->prepare($QrSelect);
               
               $Select->bindValue(':visitas', '7');
               
               $Select->execute();
               
               if ($Select->rowCount() >= 1) {
                   echo "Pesquisa retornou {$Select->rowCount()} resultado(s)<hr>";
                   $resultado = $Select->fetchAll(PDO::FETCH_ASSOC);
                   
                   echo '<pre>';
                   var_dump($resultado);
                   echo '</pre>';
                   
               }else{
                   echo "nada ainda<hr>";
               }
              
               
    
           } catch (PDOException $e) {
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
            // * ??? die;
           }

           
           
           
           
                    ?>
    </body>
</html>

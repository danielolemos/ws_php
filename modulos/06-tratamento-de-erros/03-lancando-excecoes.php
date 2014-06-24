<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $eu = null;
            
            if (!$eu) {
                   $a = new Exception("Eu sou Null", E_USER_NOTICE);
            }
                      
            
            echo $a->getMessage();
            
            echo "<pre>";
            var_dump($a);
            echo "</pre>";
            
            echo "<hr>";
            
            try{
                
                if (!$eu) {
                    throw new Exception("Eu novamente está null", E_USER_NOTICE);
                }
                
                
            } catch (Exception $e) {
                        echo "<p>Erro #{$e->getCode()}: {$e->getMessage()}<br>";
                        echo "<small>{$e->getFile()}^na linha {$e->getLine()}</small>";
                        
                        echo '<hr>';
                        
                        echo $e->xdebug_message;
            }
        
        
        ?>
    </body>
</html>

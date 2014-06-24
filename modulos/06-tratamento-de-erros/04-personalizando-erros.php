<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS - Persolnalizando Erros</title>
        <link rel="stylesheet" href="css/reset.css" />
    </head>
    <body>
        <?php
        
            require './_app/Config.inc.php';
            
            trigger_error("Essa é uma NOTICE", E_USER_NOTICE);
            trigger_error("Essa é um ALERTA", E_USER_WARNING);
            //trigger_error("Essa é um ERRO", E_USER_ERROR);
            
            
            PHPErro(WS_ERROR, "Esse é um erro persolnalizado!", __FILE__, __LINE__);
            
            WSErro("Esse é um ACCEPT!", WS_ACCEPT);
            
            try {
                
                throw new Exception("Essa é uma Exceção", E_USER_WARNING);
    
            } catch (Exception $e) {
                
                PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
                 
            }

            
            
            
            
            
        ?>
    </body>
</html>

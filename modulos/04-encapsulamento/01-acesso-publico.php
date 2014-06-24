<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         require("./inc/Config.inc.php");
         
         $daniel = new AcessoPublico("Daniel", "daniel@hotmail.com");
         $daniel->Nome = "Pedro Sabones";
         $daniel->setEmail("pedrosabones@hotmail.com");
         
         var_dump($daniel);
        ?>
    </body>
</html>

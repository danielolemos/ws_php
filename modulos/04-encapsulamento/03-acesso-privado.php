<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require "./inc/Config.inc.php";
        
        $daniel = new AcessoPrivado("Daniel Oliveira Lemos", 'daniel@dom.com', 26786367801);
       
       
        echo '<pre>';
        var_dump($daniel);
        echo '</pre>';
        
        ?>
    </body>
</html>

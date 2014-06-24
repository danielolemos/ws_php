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
                $sessao = new Session;
                
                var_dump($sessao);
                echo '<hr>';
                var_dump($_SESSION);
        ?>
    </body>
</html>

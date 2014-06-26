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
        
        //CONTROLER
        require './_app/Config.inc.php';
        
        //MODEL
        $read = new Read;
        $read->ExeRead('ws_categories');
        
        
        foreach ($read->getResult() as $cat) {
            extract($cat);
        //VIEW    
            echo "<article>"
                . "<header><h1>{$category_title}</h1></header>"
                . "<p>{$category_content}</p>"
                . "</artice><hr>";
        //END MODEL
        }
        //END CONTROLER
        ?>
    </body>
</html>

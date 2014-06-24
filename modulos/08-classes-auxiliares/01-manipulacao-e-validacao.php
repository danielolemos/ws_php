<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
                require './_app/Config.inc.php';
        /*
             $Email = "daniel@oi.com";
             
             if (Check::Email($Email)) {
                echo "email válido";
             }else{
                 echo "email inválido";
             }
           
             $Name = 'Estampos aprendendo PHP. Veja você como    é!';
             
             echo Check::Name($Name) . '<hr>';
             
             $Data = '05/01/2014';
             echo Check::Data($Data);
             
             $String = 'Olá mundo, estamos estudadando PHP na UpInside!';
             echo Check::Words($String, 4, '<small>continue lendo...</small><hr>');
             
            
              
             echo Check::CatByName('artigos') . '<hr>';
             echo Check::CatByName('esportes') . '<hr>';
             echo Check::CatByName('internet') . '<hr>';
           */  
             echo Check::UserOnline() . '<hr>';
             
             echo Check::Image('google.jpg', 'Google');
             echo Check::Image('google.jpg', 'Google', 300, 180);
             
             
             
             
             ?>
        
        
    </body>
</html>

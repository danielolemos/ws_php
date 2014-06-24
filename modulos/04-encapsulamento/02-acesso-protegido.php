<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require "./inc/Config.inc.php";
        
        $maria = new AcessoProtegido("Maria", "maria@server.com");
        $maria->Nome = "Maria Santos";
        $maria->setEmail("mariasanta@server.com");
        // $maria->setNome("Samarina");
        
        var_dump($maria);
        
        echo "<hr>";
        
        $pablo = new AcessoProtegidoFilha("Pablo", "pablo@email.com");
        
        
        $pablo->AddCpf("Pablo Silva", "09883837738");
        
        var_dump($pablo);
        
        
        
        
        ?>
    </body>
</html>

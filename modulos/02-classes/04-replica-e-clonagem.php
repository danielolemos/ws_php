<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require('./class/ReplicaClonagem.class.php');
        
        $readA = new ReplicaClonagem("posts", "categoria = 'noticias'", "ORDER BY DATA DESC");
        $readA->Ler();
        
        $readA->setTermos("categoria = 'internet'");
        $readA->Ler();
        
        
        $readB = clone($readA);
        $readB->setTermos("categoria = 'redes sociais'");
        
        $readC = clone($readA);
        $readC->setTermos("categoria = 'sapopemba'");
        
        
        $readB->Ler();
        
        $readC->Ler();
        
        
        echo '<pre>';
        var_dump($readA,$readB,$readC);
        echo '</pre>';
        
        ?>
    </body>
</html>

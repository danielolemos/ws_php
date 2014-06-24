<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
                    require('./class/AtributosMetodos.class.php');
                    
                    
                    $pessoa = new AtributosMetodos();
                    $pessoa->setUsuario('Daniel',36, 'Web Developer');
                    $usuario = $pessoa->getUsuario();
                    echo $usuario;
                    
                    echo "<hr>";
                    
                    $pessoa->Idade = 'banana';
                    $pessoa->setUsuario('Daniel Oliveira', 27, 'WebMaster');
                    $pessoa->setIdade(28);
                    $pessoa->Envelhecer();
                    $pessoa->Envelhecer();
                    
                    echo $pessoa->getClass();
                    
                    
                    
                    
        ?>
    </body>
</html>

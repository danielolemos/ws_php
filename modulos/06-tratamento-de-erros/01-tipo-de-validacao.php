<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Tratamento por existência:</h3>
        <hr>
        
        <?php
        
            //$string = 'contato';
            //$string = 3;
            $string = '';
        
            if (is_string($string)) {
                echo "String é uma string!";
            }else if (!is_string($string)) {
                echo "String não é uma string!";
            }
            
            echo "<hr>";
            
            if (!empty($string)) {
                echo "String existe e tem valor";
            }else if (isset($string)) {
                echo "String existe mas está em branco";
            }
            
            
        ?>
        
        <hr><hr>
        <h3>Tomada decisão:</h3>
        <hr>
        
        
        
        
        <?php
        
                $decisao = 'studio@upinside.com.br';
                
                if (!filter_var($decisao, FILTER_VALIDATE_EMAIL)) {
                    echo "E-mail informado é inválido";
                }else if ($decisao == 'campus@upinside.com.br') {
                    die("Esse e-mail é restrito");
                }else{
                    echo "E-mail válido";
                }
                 
                
                echo " :) ";
        
        
        ?>
        
        
        <hr><hr>
        <h3>Retorno de  Flags:</h3>
        <hr>
        
        <?php
                    function Idade($Idade = null){
                        
                        if (!$Idade) {
                            return false;
                        }else if (!is_int($Idade)) {
                            return false;
                        }
                        
                        return "Você nasceu em: " . ( date('Y') - $Idade );                        
                    }    
                        
                   
                    $idade = 37;
                    
                    if (Idade($idade)) {
                        echo Idade($idade);
                    }else{
                        echo "Erro, informe um INT idade";
                    }
                              
        
        
        ?>
        
        <hr><hr>
        <h3>Retorno de  Flags:</h3>
        <hr>
        
        
        <?php
                
        $um = 10;
        $dois = '10';
        
        if ($um == $dois) {
            echo "Um tem o mesmo valor que dois";
        }else if ($um != $dois) {
            echo "Um e dois tem valor diferente";
        }
        
        echo '<hr>';
        
        if ($um === $dois) {
            echo "Um e dois tem o mesmo valor e são do mesmo tipo";
        }elseif ($um !== $dois) {
            echo "Um e dois tem valor ou tipo diferente";
        }
                
        
        ?>
        
    </body>
</html>

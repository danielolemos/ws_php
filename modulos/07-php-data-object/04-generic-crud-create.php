<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
           require "./_app/Config.inc.php";
           
           $Cadastra = new Create;
           
           $Dados = ['agent_name' => 'Internet Explorer', 'agent_views' => '930'];
           
           $Cadastra->ExeCreate('ws_siteviews_agent', $Dados);
           
           if ($Cadastra->getResult()) {
               echo "Cadastro com sucesso<hr>";
           }
           
           echo '<pre>';
           var_dump($Cadastra);
           echo '</pre>';
           
        ?>
    </body>
</html>

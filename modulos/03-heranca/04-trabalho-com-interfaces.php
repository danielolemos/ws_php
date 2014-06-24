<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require("./interface/IAluno.php");
        require("./class/TrabalhoComInterfaces.class.php");
        
        $aluno = new TrabalhoComInterfaces("Pedro", "PHP");
        $aluno->Matricular("PHP");
        $aluno->Formar();
        
        
        echo "<pre>";
        var_dump($aluno);
        echo "</pre>";
        ?>
    </body>
</html>

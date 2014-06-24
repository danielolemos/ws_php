<?php

require_once './class/ModelagemDeClasse.class.php';

$daniel = new ModelagemDeClasse("Daniel", 36, "WebMaster", 25000);
$daniel->setProfissao("Gerente de Projetos");


echo '<pre>';
var_dump($daniel);
echo '</pre>';
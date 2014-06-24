<?php

require ("./inc/Config.inc.php");

$pessoa = new Heranca("Daniel Oliveira", 36, "Web Developer");
$pessoa->Formar("Pro PHP");
$pessoa->Formar("Work Series PHP");
$pessoa->Envelhecer();


echo '<pre>';
var_dump($pessoa);
echo '</pre>';
echo '<hr>';

$pessoaME = new HerancaJuridica('Daniel Lemos', 36, 'DOM Web Services');
$pessoaME->Formar("Pro PHP");
$pessoaME->Formar("Work Series PHP");
$pessoa->Envelhecer();
$pessoaME->VerPessoa();
$pessoaME->Contratar('Pedro');
$pessoaME->Contratar('Maria');
$pessoaME->VerEmpresa();


echo '<pre>';
var_dump($pessoaME);
echo '</pre>';
echo '<hr>';



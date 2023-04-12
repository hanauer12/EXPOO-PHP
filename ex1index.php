<?php

require_once 'ex1.php';


$primeirapessoa = new  Pessoa('Renato','Masculino','22');

echo $primeirapessoa->recuperanome();
echo PHP_EOL;
echo $primeirapessoa->recuperaidade();
echo PHP_EOL;
echo $primeirapessoa->recuperasexo();
echo PHP_EOL;
echo Pessoa::$numerodepessoas;
echo PHP_EOL;

$segundapessoa = new Pessoa('Gustavo', 'Masculino','29');
var_dump($segundapessoa);
echo Pessoa::$numerodepessoas;
echo PHP_EOL;
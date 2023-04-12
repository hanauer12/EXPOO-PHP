<?php

require_once 'ex2.php';

$primeiraconta = new Conta('123.456.789-10','Renato');
$primeiraconta->depositar(500) ;
$primeiraconta->sacar(00) ;
echo PHP_EOL;
echo $primeiraconta->recuperanometitular();
echo PHP_EOL;
echo  $primeiraconta->recuperacpftitular();
echo PHP_EOL;
echo  $primeiraconta->recuperarsaldo();
echo PHP_EOL;



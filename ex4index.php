<?php

require_once 'ex4.php';


$retangulo = new retangulo('10','10');
echo $retangulo ->calcularArea();
echo $retangulo ->calcularPerimetro();

$circulo = new circulo('10');

echo $circulo -> calcularArea();
echo $circulo -> calcularPerimetro();
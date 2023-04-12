<?php

class Carro
{
    private $marca;
    private $modelo;
    private $ano;
    private $velocidadeAtual = 0;


    public function __construct($marca,$modelo,$ano)
    {
        echo "Criando um novo carro" . PHP_EOL;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;

    }

    public function acelerar( $valorAacelerar)
    {
        if ($valorAacelerar < 0) {
            echo "Valor precisa ser positivo";
        } else {
           return  "A velocidade atual é de: " . ($this->velocidadeAtual += $valorAacelerar) . PHP_EOL;
        }
    }

    public  function recuperamarca(){
        return  "A marca do veiculo é: " .  $this->marca . PHP_EOL;

    }

    public  function recuperamodelo(){
        return  "A Modelo do veiculo é: " .  $this->modelo . PHP_EOL;

    }

    public  function recuperaano(){
        return  "A Modelo do veiculo é: " .  $this->ano . PHP_EOL;

    }




}
<?php
class Conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;

    public function __construct( $cpfTitular, $nomeTitular)
    {
        echo "Criando nova conta".PHP_EOL;
        $this->cpfTitular = $cpfTitular;
        $this->validaNometitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;

    }



    public function sacar(float $valorAsacar)
    {
        if ($valorAsacar > $this->saldo) {
            echo "Saldo de ". $valorAsacar . " indisponivel para saque";
        } else {
            $this->saldo -= $valorAsacar;
            echo "Valor sacado = " .$valorAsacar;
        }
    }

    public function depositar( $valorADepositar)
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
        } else {
            $this->saldo += $valorADepositar;
            echo "Valor depositado = " . $valorADepositar . PHP_EOL;
        }
    }


    public function recuperarsaldo()
    {
        return "Saldo total disponivel = " . $this->saldo;
    }

    public function recuperacpftitular()
    {
        return "CPF do titular da conta = " . $this->cpfTitular;
    }

    public function recuperanometitular()
    {
        return "Nome do titular da conta = " .  $this->nomeTitular;
    }

    private function validanometitular($nomeTitular)
    {
        if (strlen($nomeTitular) <5 ){
            echo "Nome precisa ter pelo menos 5 caracter";
            exit();
        }

    }



}



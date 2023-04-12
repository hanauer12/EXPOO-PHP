<?php

class Colaborador
{

    private $nome;
    private $sobrenome;
    private $salariomensal = 0;

    public function __construct($nome,$sobrenome,$salariomensal)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->salariomensal = $salariomensal;
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getSobrenome()
    {
        return $this->sobrenome;
    }


    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }


    public function getSalariomensal()
    {
        return $this->salariomensal;
    }


    public function setSalariomensal($salariomensal)
    {
        $this->salariomensal = $salariomensal;
    }

    public function  salarioanual()
    {
        return "O salario anual é de " .  ($this->salariomensal * 12) . " reais ". PHP_EOL;

    }

    public function aumentoporcentagem($aumentoemporcentagem)
    {
        if ($aumentoemporcentagem < 0) {
            echo "Valor precisa ser positivo";
        } else {
            return $this->salariomensal * (1 + ($aumentoemporcentagem / 100)) . PHP_EOL;

        }

    }


}

$colaborador = new Colaborador('Renato','Hanauer', '2200');
echo $colaborador -> salarioanual();
echo $colaborador ->aumentoporcentagem(5);

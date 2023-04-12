<?php

class funcionarios
{
    private $nome;
    private $RGdofuncionario;
    protected $salariobase;

    public function __construct($nome,$RGdofuncionario,$salariobase)
    {
        $this->nome = $nome;
        $this->RGdofuncionario = $RGdofuncionario;
        $this->salariobase = $salariobase;

    }



}

class vendedores extends funcionarios{
    private $totaldevendas;
    public function __construct($nome,$RGdofuncionario,$salariobase,$totaldevendas){
        parent::__construct($nome,$RGdofuncionario,$salariobase);
        $this->totaldevendas = $totaldevendas;

    }
    public function salariocomcomissao(){
        $calculo = $this->totaldevendas / 100;
        $novo = $calculo * 5;
        return "Salario com comissão: " . ($this->salariobase + $novo) . PHP_EOL;

    }
    public function zerarValores() {
        $this->totaldevendas = 0;
    }


}

class administrativos extends Funcionarios
{
    private $horasextras;

    public function __construct($nome, $RGdofuncionario,$salariobase, $horasextras)
    {
        parent::__construct($nome,$RGdofuncionario,$salariobase);
        $this->horasextras = $horasextras;

    }

    function calcularHorasExtras() {
        $valorHoraExtra = $this->salariobase * 0.01;
        $valorHorasExtras = $this->horasextras * $valorHoraExtra;
        return $this->salariobase +  $valorHorasExtras . PHP_EOL ;
    }

    public function zerarValores() {
        $this->horasextras = 0;
    }



}
$teste = new vendedores('Renato','101010010','2000','1000');
echo $teste->salariocomcomissao();
$teste->zerarValores();


$teste2 = new administrativos('Gustavo','00000','4000','10');
echo $teste2->calcularHorasExtras();
$teste2->zerarValores();

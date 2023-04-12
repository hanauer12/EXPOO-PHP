<?php

require_once 'ex1.php';
class Funcionario extends Pessoa

{
    private $salario;

    public function __construct($nome, $sexo, $idade,$salario)
    {
        parent::__construct($nome, $sexo, $idade);
        $this->salario = $salario;

    }

}
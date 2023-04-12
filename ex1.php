<?php

class Pessoa 
{
    private $nome;

    private $idade;

    private $sexo;

    public static $numerodepessoas = 0;

    public function __construct($nome , $sexo, $idade)
    {
        echo "Criando Pessoa" . PHP_EOL ;
        $this->validaNometitular($nome);
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
        self::$numerodepessoas++;


    }
    public function recuperanome()
    {
        return $this->nome  ;
    }

    public function recuperaidade()
    {
        return $this->idade;
    }

    public function recuperasexo()
    {
        return $this->sexo;
    }


    private function validanometitular($nomeTitular)
    {
        //retorna o tamanho da string usando o strelen
        if (strlen($nomeTitular) <5 ){
            echo "Nome precisa ter pelo menos 5 caracter";
            exit();
        }

    }

    public function numerodepessoas()
    {
        return self::$numerodepessoas;

    }

}


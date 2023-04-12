<?php

class Pedido {
    private $numero;
    private $descricao;
    private $quantidade;
    private $preco_unitario;

public function __construct($numero, $descricao, $quantidade, $preco_unitario) {
    $this->numero = $numero;
    $this->descricao = $descricao;
    $this->quantidade = $quantidade;
    $this->preco_unitario = $preco_unitario;
}

// Métodos set
public function setNumero($numero) {
    $this->numero = $numero;
}

public function setDescricao($descricao) {
    $this->descricao = $descricao;
}

public function setQuantidade($quantidade) {
    $this->quantidade = $quantidade;
}

public function setPrecoUnitario($preco_unitario) {
    $this->preco_unitario = $preco_unitario;
}

// Métodos get
public function getNumero() {
    return $this->numero;
}

public function getDescricao() {
    return $this->descricao;
}

public function getQuantidade() {
    return $this->quantidade;
}

public function getPrecoUnitario() {
    return $this->preco_unitario;
}

// Método para calcular valor da fatura
public function calcularValorFatura() {
    return "Valor total de: " . ($this->quantidade * $this->preco_unitario) . PHP_EOL;
    }
}

$fatura = new Pedido('1','teste','10','10');
echo $fatura->calcularValorFatura();

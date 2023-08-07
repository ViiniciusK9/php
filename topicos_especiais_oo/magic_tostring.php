<?php

class Titulo
{
    private $valor;
    private $vencimento;

    public function __construct($valor, $vencimento)
    {
        $this->valor = $valor;
        $this->vencimento = $vencimento;
    }

    public function __toString()
    {
        return "Valor: {$this->valor}, Vencimento: {$this->vencimento} <br>";
    }

}

$tit = new Titulo(100, '2019-10-10');

print $tit;

<?php

abstract class Conta
{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        if ($saldo > 0) {
            $this->saldo = $saldo;
        } else {
            $this->saldo = 0;
        }
    }

    public function depositar($valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getInfo()
    {
        return "Agencia {$this->agencia}, Conta {$this->conta}";
    }

    abstract function retirar($valor);

}
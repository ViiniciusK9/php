<?php

final class ContaCorrente extends conta
{
    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite)
    {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    public function retirar($valor)
    {
        if ($valor <= ($this->saldo + $this->limite)) 
        {
            $this->saldo -= $valor;
        }
        else 
        {
            return false;
        }
        return true;
    }

}
<?php

final class ContaPoupanca extends Conta
{
    public function retirar($valor)
    {
        if ($valor <= $this->saldo) 
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
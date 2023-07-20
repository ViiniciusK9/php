<?php

require_once 'classes/conta.php';
require_once 'classes/conta_poupanca.php';
require_once 'classes/conta_corrente.php';

$contas = [];
$contas[] = new ContaCorrente('1234', '4321', 100, 500);
$contas[] = new ContaPoupanca('0987', '7890', 500);


foreach ($contas as $conta)
{
    if ($conta instanceof Conta)
    {
        print "{$conta->getInfo()}<br>";
        print "-- Saldo atual: {$conta->getSaldo()}<br>";
        $conta->depositar(350);
        print "-- Deposito de 350 reais.<br>";
        print "-- Saldo atual: {$conta->getSaldo()}<br>";
        $valor_retirada = 900;
        if ($conta->retirar($valor_retirada))
        {
            print "-- Retirada de {$valor_retirada} (OK) <br>";
        }
        else
        {
            print "-- Retirada de {$valor_retirada} (Não efetuada) <br>";
        }
        print "-- Saldo atual: {$conta->getSaldo()}<br>";
    }
}
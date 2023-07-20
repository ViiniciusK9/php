<?php

require_once './classes/conta.php';
require_once './classes/conta_poupanca.php';
require_once './classes/conta_corrente.php';

$cp = new ContaPoupanca('100', '617234', 5000);
$cc = new ContaCorrente('200', '12345', 4000, 2000);

$cp->retirar(1000);
$cc->depositar(1000);


echo '<pre>';
print_r($cp);
print_r($cc);
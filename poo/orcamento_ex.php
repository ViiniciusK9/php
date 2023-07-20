<?php

require_once './classes/orcavel_interface.php';
require_once './classes/produto2.php';
require_once './classes/servico.php';
require_once './classes/orcamento.php';

$orc = new Orcamento;
$orc->add(new Produto2('Mouse', 10, 120), 1);
$orc->add(new Produto2('Teclado', 10, 400), 1);
$orc->add(new Produto2('Headset', 123, 230), 1);

$orc->add(new Servico('Manutenção', 10), 1);
$orc->add(new Servico('Conserto', 45), 1);



print $orc->calculaTotal() . '<br>';
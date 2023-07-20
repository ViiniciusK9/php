<?php

require_once './classes/produto.php';
require_once './classes/cesta.php';

$c1 = new Cesta;

$p1 = new Produto('Mouse', 10, 120);
$p2 = new Produto('Teclado', 3, 400);
$p3 = new Produto('Headset', 29, 240);


$c1->addItem($p1);
$c1->addItem($p2);
$c1->addItem($p3);

echo '<pre>';
print_r($c1);




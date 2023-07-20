<?php

require_once 'classes/fabricante.php';
require_once 'classes/produto.php';

$p1 = new Produto('Mouse', 10, 120);
$f1 = new Fabricante('Redragon', 'Rua tal', '7298345');


$p1->setFabricante($f1);

print "O Fabricante do produto {$p1->getDescricao()} é {$p1->getFabricante()->getNome()}<br>";

echo '<pre>';

var_dump($p1);
var_dump($f1);

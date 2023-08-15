<?php

require_once 'classes/produto.php';
require_once 'classes/caracteristicas.php';
require_once 'classes/fabricante.php';

$p1 = new Produto('Mouse', 10, 120);

$p1->addCaracteristica('Cor', 'Preto');
$p1->addCaracteristica('Peso', '350gr');

echo '<pre>';
//print_r($p1);

print "Produto: {$p1->getDescricao()}<br>";

foreach ($p1->getCaracteristicas() as $caracteristica)
{
    print "{$caracteristica->getNome()}: {$caracteristica->getValor()}<br>";
}

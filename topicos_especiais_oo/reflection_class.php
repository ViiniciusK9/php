<?php

require_once './classes/veiculo.php';

$rc = new ReflectionClass('Automovel');

echo '<pre>';

//print_r($rc->getMethods());
//print_r($rc->getProperties());
//print_r($rc->getParentClass());


echo '<br>';

foreach ($rc->getMethods() as $method)
{
    print "Nome do metodo: {$method->getName()} <br>";
    print_r($method->getParameters());
}


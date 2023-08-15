<?php

$ingredientes = new SplStack();

$ingredientes->push('Peixe');
$ingredientes->push('Sal');
$ingredientes->push('Limão');

foreach ($ingredientes as $item)
{
    print "Item: {$item}<br>";
}

print "<br>";

print "Quantidade: {$ingredientes->count()}<br>";
print "Elemento que saiu: {$ingredientes->pop()}<br>";
print "Quantidade: {$ingredientes->count()}<br>";
print "Elemento que saiu: {$ingredientes->pop()}<br>";
print "Quantidade: {$ingredientes->count()}<br>";
print "Elemento que saiu: {$ingredientes->pop()}<br>";
print "Quantidade: {$ingredientes->count()}<br>";


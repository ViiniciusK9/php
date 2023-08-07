<?php

$ingredientes = new SplQueue();

$ingredientes->enqueue('Peixe');
$ingredientes->enqueue('Sal');
$ingredientes->enqueue('Limão');

foreach ($ingredientes as $item)
{
    print "Item: {$item}<br>";
}

print "<br>";

print "Quantidade: {$ingredientes->count()}<br>";
print "Elemento que saiu: {$ingredientes->dequeue()}<br>";
print "Quantidade: {$ingredientes->count()}<br>";
print "Elemento que saiu: {$ingredientes->dequeue()}<br>";
print "Quantidade: {$ingredientes->count()}<br>";
print "Elemento que saiu: {$ingredientes->dequeue()}<br>";
print "Quantidade: {$ingredientes->count()}<br>";


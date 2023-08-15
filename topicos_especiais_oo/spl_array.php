<?php

$dados = ['salmão', 'tilápia', 'sardinha', 'badejo', 'pescada', 'dourado', 'corvina', 'cavala', 'bagre'];

$objarray = new ArrayObject($dados);

print "<pre>";

$objarray->append('bacalhau');

$pos = 2;

print "Posição {$pos}: {$objarray->offsetGet($pos)}<br>";

$objarray->offsetSet($pos, 'linguado');

$objarray->offsetUnset(4);

if ($objarray->offsetExists(10))
{
    print "Posição 10 encontrada <br>";
}
else
{
    print "Posição 10 não encontrada <br>";
}

$objarray[] = 'atum';

$objarray->natsort();

print "Quantidade: {$objarray->count()}<br>";

foreach ($objarray as $item)
{
    print "Item: {$item}<br>";
}

//print_r($objarray);
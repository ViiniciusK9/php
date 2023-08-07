<?php

require_once './classes/Record.php';

class Produto extends Record
{
    const TABLENAME = 'produto';
}

$p1 = new Produto;

$p1->nome = 'Chocolate';
$p1->preco = 10;
$p1->quantidade = 40;

print $p1->save() . '<br>';
print $p1->delete(1) . '<br>';
print $p1->load(3) . '<br>';
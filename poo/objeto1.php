<?php

class Produto
{
    public $descricao;
    public $estoque;
    public $preco;
}


$p1 = new Produto();
$p1->descricao = 'Mouse';
$p1->estoque = 9;
$p1->preco = 210;

$p2 = new Produto();
$p2->descricao = 'Erva';
$p2->estoque = 10;
$p2->preco = 10;

echo '<pre>';
var_dump($p2);

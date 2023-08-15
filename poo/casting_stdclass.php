<?php

$produto1 = new stdClass;

$produto1->descricao = 'Mouse';
$produto1->estoque = 19;
$produto1->preco = 120;

echo '<pre>';

var_dump($produto1);


$vector1 = (array) $produto1;

var_dump($vector1);

$vector2 = ['descricao' => 'Gatorade', 'estoque' => 2000, 'preco' => 5.55];

$produto2 = (object) $vector2;

var_dump($produto2);

/**** Negocio doido ****/

$produto = [];
$produto['descricao'] = 'Monitor';
$produto['estoque'] = 20;
$produto['preco'] = 699;

$objeto = new stdClass;

foreach ($produto as $chave => $valor) 
{
    $objeto->$chave = $valor;
}

var_dump($objeto);


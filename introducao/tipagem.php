<?php

/*
$codigo = 5;
$nome = 'teste';
var_dump($codigo);
var_dump($nome);
var_dump(4 + '5');
*/

/*
function calcula_imc($peso, $altura)
{
    var_dump($peso, $altura);
    print '<br>';
    return $peso / ($altura * $altura);
}

var_dump(calcula_imc('55', 1.65));

print '<br><br><br>';

function calcula_imc2(float $peso, float $altura): int
{
    var_dump($peso, $altura);
    print '<br>';
    return $peso / ($altura * $altura);
}

var_dump(calcula_imc2(55, 1.65));

*/

declare(strict_types = 1); // força a tipagem em argumentos de função

function calcula_imc2(float $peso, float $altura)
{
    var_dump($peso, $altura);
    print '<br>';
    return $peso / ($altura * $altura);
}

$peso = '55';

var_dump(calcula_imc2((float) $peso, 1.65));

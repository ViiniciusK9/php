<?php

function calcula_imc(float $peso, float $altura): float 
{
    return $peso / ($altura * $altura);
}

//echo calcula_imc(55.5, 1.65);

$total = 0;

function km2milhas($km)
{
    global $total;
    $total += $km;
    return $km * 0.6;
}

/*
echo km2milhas(100);
echo km2milhas(100);
echo km2milhas(100);
var_dump($total);
*/

function percorre($km)
{
    static $total;
    $total += $km;
    print "Percorreu mais {$km} km<br>Total: {$total}<br>";
}

/*
percorre(50);
percorre(50);
percorre(50);
percorre(50);
*/

// & passa a referencia da variavel (para objetos o php faz automatico)
function incrementa(&$variavel, $valor)
{
    $variavel += $valor;
}

$teste = 10;

incrementa($teste, 20);

//var_dump($teste);

/*
 $lista = [1, 3, 4, 2, 0];
 
 sort($lista);
 
 var_dump($lista);
*/

// função anonima
$remove_acento = function ($str) {
    return str_replace(['á', 'é', 'í', 'ó', 'ú'], ['a', 'e', 'i', 'o', 'u' ], $str);
};


var_dump($remove_acento('bábébíbóbú'));

function toupper($palavra, $funcao)
{
    $palavra = $funcao($palavra);
    return strtoupper($palavra);
}

var_dump(toupper('bábébíbóbú', $remove_acento));


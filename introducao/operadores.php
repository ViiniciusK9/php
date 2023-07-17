<?php

$valor = 100;

$valor = $valor + 5;

$valor++;

$valor += 2;

$valor -= 2;

$valor /= 5;

$valor *= 2;

var_dump($valor);
print '<br>';

// incrementa depois atribui
$teste2 = ++$valor;

// atribui depois incrementa
$teste1 = $valor++;

var_dump($teste1);
print '<br>';
var_dump($teste2);
print '<br>';
var_dump($valor);

print '<br>';

if (1 !== '1') {
    print 'h\suidfhsaiudfhauisdhfasuid';
}

print '<br>';

if (1 != '1') {
    print 'blablabla';
}

/*** 
 * >
 * <
 * >=
 * <=
 * ==
 * ===  valor e tipo
 * +=
 * ++
 * AND ou &&
 * OR ou ||
 * !
 * !==
 * !=
 * ***/
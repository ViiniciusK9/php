<?php

/**** Strings ****/
/* 
$nome = 'Vinicius';
$sobrenome = 'Sobrenome';

print $nome . ' ' . $sobrenome;

$nome_completo = $nome . ' ' . $sobrenome;
$nome_completo = "$nome            $sobrenome";
$nome_completo = "aaa{$nome}<br> alguma coisa {$sobrenome}";

print $nome_completo;
print '<br>';

print "{$nome}  \"      ";
*/



/**** Números ****/
/*
$a = 5;
$b = 4;
var_dump($a * $b);

print '<br>';

$a = 5;
$b = 4.5;
var_dump($a * $b);

print '<br>';

$a = 5;
$b = '4';
var_dump($a * $b);

print '<br>';

$a = 5;
$b = '4.5josdffjois';
var_dump($a * $b);
*/

/**** Variável ****/
/*
$a = 5;
$b = $a;

$a = 10;

var_dump($a);
var_dump($b);

print '<br>';

$a = 5;
$b = &$a;

$a = 10;

var_dump($a);
var_dump($b);
*/

/**** Booleana ****/
/*
$peso = 50;

$multa = ($peso > 100);

var_dump($multa);

print '<br>';

if ($peso > 23)
{
    print 'multa<br>';
}

$nome = '';

if ($nome)
{
    print 'nome tem conteudo<br>';
} else 
{
    print 'nome não tem conteúdo<br>';
}

$nome = 'bla bla bla';

if ($nome)
{
    print 'nome tem conteudo<br>';
}

*/

/**** Arrays ****/
/* 
$lista = ['vermelho', 'verde', 'azul'];

var_dump($lista);

$lista = ['cor' => 'vermelho', 'peso' => 20];

echo '<br>cor: ', $lista['cor'], '<br>';
echo 'peso: ', $lista['peso'], '<br>';

$lista = [2 =>'vermelho', 0 =>'verde', 1 =>'azul'];

var_dump($lista);
*/

/**** Objeto ****/

$pessoa = new stdClass;

$pessoa->nome = 'Gabriel';
$pessoa->altura = 1.8;

$pessoa2 = $pessoa;

$pessoa2->nome = 'Joao';

var_dump($pessoa) ;
print '<br>';
var_dump($pessoa2) ;

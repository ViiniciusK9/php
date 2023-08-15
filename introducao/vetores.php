<?php

//$cores = array('vermelho', 'verde', 'amarelo');
//$cores = ['vermelho', 'verde', 'amarelo'];

/*
$cores = [];
$cores[] = 'vermelho';
$cores[] = 'verde';
$cores[] = 'amarelo';

$string = 'teste';

print $string[0] . '<br>';

print $cores[0] . '<br>';
var_dump($cores);

*/

/* 
$cores = [];
$cores[4] = 'vermelho';
$cores[2] = 'verde';
$cores[7] = 'amarelo';

var_dump($cores);

print '<br>' . $cores[4] . '<br>';
*/
/*
$pessoa = [];
$pessoa['nome'] = 'maria';
$pessoa['endereco'] = 'rua tal';
$pessoa['nascimento'] = '10/10/2003';

var_dump($pessoa);
print '<br>';


foreach ($pessoa as $chave => $valor) {
    print $chave . " : " . $valor . '<br>';
}

*/

/*

$carros = ['palio' => ['cor' => 'azul', 'marca' => 'fiat', 'ano' => 2002],
'corsa' => ['cor' => 'vermelho', 'marca' => 'chevrolet ', 'ano' => 2006]
];

print $carros['palio']['cor'];

foreach ($carros as $modelo => $informacoes)
{
    print "<b>$modelo</b><br>";
    foreach ($informacoes as $chave => $valor) 
    {
        print $chave . " : " . $valor . '<br>';
    }
}

*/


//$cores = ['vermelho', 'verde', 'amarelo'];
//$cores[] = 'ciano';
//array_push($cores, 'ciano');
//array_unshift($cores, 'ciano');
//array_shift($cores);
//array_pop($cores);
//$cores = array_reverse($cores);

//$resultado = array_merge($cores, $cores);


//var_dump($resultado);

$carros = [];
$carros[1001] = 'palio 2002';
$carros[5234] = 'celta 2033';
$carros[6234] = 'uno 1111';
$carros[1234] = 'civic 2030';

//sort($carros);
//asort($carros);
//ksort($carros);



echo '<pre>';

var_dump($carros);
var_dump(array_keys($carros));
var_dump(array_values($carros));

// tamanho
var_dump(count($carros));

//esta no array ?
var_dump(in_array('palio 2002', $carros));
var_dump(in_array('palio 2002x', $carros));

$data = '2020-10-20';

$partes = explode('-', $data);

var_dump($partes);

$partes = ['2020', '10', '20'];

$data = implode('-', $partes);

var_dump($data);

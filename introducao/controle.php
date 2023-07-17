<?php


$resultado = (10 > 10) ? 'verdadeiro' : 'falso';

var_dump($resultado);


$count = 1;

while ($count <= 5) 
{
    print $count . ' ';
    $count++;
}

for ($i=0; $i < 3 ; $i++) { 
    print $i . ' ';
}


$tipo = 'pdf';

switch ($tipo)
{
    case 'pdf':
        print 'Arquivo PDF<br>';
        break;
    case 'csv':
        print 'Arquivo CSV<br>';
        break;
    default:
        print 'Arquivo Default<br>';
        break;
}


$lista = ['azul', 'amarelo', 'verde', 'branco'];

foreach ($lista as $cor) {
    print $cor . ' ';
}
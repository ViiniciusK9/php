<?php

/* ler
$handler = fopen('c://teste/teste.txt', 'r');

while (!feof($handler)) {
    print fgets($handler, 4096);
    print  '<br>';
}

*/

/* escrever
$handler = fopen('c://teste/teste2.txt', 'w');

fwrite($handler, 'linha 1' . PHP_EOL);
fwrite($handler, 'linha 2' . PHP_EOL);
fwrite($handler, 'linha 3' . PHP_EOL);

fclose($handler);
*/

// maneira simples de ler um arquivo
//print file_get_contents('c://teste/teste.txt');

// maneira simples de escreve em um arquivo
//file_put_contents('c://teste/teste3.txt', "a\nb\nc\n");


// transforma o arquivo em um array onde cada linha é um index
/*
$arquivo = file('c://teste/teste.txt');

var_dump($arquivo);

foreach ($arquivo as $linha) {
    echo $linha, '<br>';
}
*/

//copy('c://teste/teste.txt', 'c://teste/teste4.txt');
//rename('c://teste/teste4.txt', 'c://teste/teste100.txt');

//unlink('c://teste/teste100.txt');

/*

if (file_exists('c://teste/teste.txt')) {
    echo 'Arquivo exite <br>';
} else {
    echo 'Arquivo não existe<br>';
}
*/

//mkdir('c://teste/novodir', 0777);

//rmdir('c://teste/novodir');

// percorrer pelo diretorio
$arquivos = scandir('c://teste');

foreach ($arquivos as $arquivo) {
    echo $arquivo . '<br>';
}

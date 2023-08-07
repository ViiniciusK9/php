<?php

//Acesso ao xml 
$xml = simplexml_load_file('./paises.xml');

echo "<pre>";

//var_dump($xml);

//print "Nome: " . $xml->nome . "<br><br><br><br>";

foreach ($xml->children() as $elemento => $valor)
{
    //print "{$elemento} : {$valor} <br>";
}



// Elementos filhos
$xml = simplexml_load_file('paises2.xml');
/*
var_dump($xml);

print "Nome: {$xml->nome} <br>";
print "Idioma: {$xml->idioma} <br>";

print "Informações geográficas <br>";
print "Clima: {$xml->geografia->clima} <br>";
print "Costa: {$xml->geografia->costa} <br>";
print "Pico: {$xml->geografia->pico} <br>";
*/


// Elementos repetitivos
$xml = simplexml_load_file('paises3.xml');

//var_dump($xml);

//print "Nome: {$xml->nome} <br>";

foreach ($xml->estados->nome as $estado) {
    //print "Nome do estado: {$estado} <br>";
}

//Acessando atributos
$xml = simplexml_load_file('paises4.xml');

//print_r($xml);

foreach ($xml->estados->estado as $estado) {
    //print "Nome: {$estado['nome']}, Capital: {$estado['capital']}<br>";
}


foreach ($xml->estados->estado as $estado) {
    foreach($estado->attributes() as $key => $value)
    {
        print "{$key} : {$value} <br>";
    }
    print "<br><br>";
}
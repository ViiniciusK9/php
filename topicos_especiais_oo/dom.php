<?php

$doc = new DOMDocument;

$doc->load('./bases.xml');

$bases = $doc->getElementsByTagName('base');

echo '<pre>';

foreach ($bases as $base)
{
    /*
    //print_r($base);
    print "Id: {$base->getAttribute('id')}<br>";
    $names = $base->getElementsByTagName('name');
    $hosts = $base->getElementsByTagName('host');
    $types = $base->getElementsByTagName('type');
    $users = $base->getElementsByTagName('user');
    print "Name: {$names->item(0)->nodeValue}<br>
    Host: {$hosts->item(0)->nodeValue}<br>
    Type: {$types->item(0)->nodeValue}<br>
    User: {$users->item(0)->nodeValue}<br>";
    */
}

// Criando um arquivo XML utilizando a biblioteca DOM Document

$dom = new DOMDocument('1.0', 'UTF-8');
$dom->formatOutput = true;

$bases = $dom->createElement('bases');
$base = $dom->createElement('base');
$bases->appendChild($base);

$atr = $dom->createAttribute('id');
$atr->value = '1';

$base->appendChild($atr);

$base->appendChild( $dom->createElement('chave', 'valor') );
$base->appendChild( $dom->createElement('nome', 'teste') );
$base->appendChild( $dom->createElement('host', '192.168.0.1') );
$base->appendChild( $dom->createElement('type', 'mysql') );
$base->appendChild( $dom->createElement('user', 'mary') );

print $dom->saveXML($bases);
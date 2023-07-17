<?php

$nome = 'Joao';
$sobrenome = 'Silva';

$nome_completo = $nome . $sobrenome;
$nome_completo = "$nome $sobrenome";
$nome_completo = "{$nome} {$sobrenome}xxasds";

print "Exemplos de 'aspas' <br>";
print 'Exemplos de "aspas" <br>';

print 'Exemplo de \'aspas\'<br>';
print "Exemplo de \"aspas\"<br>";

print strtoupper($nome_completo) . '<br>';
print strtolower($nome_completo) . '<br>';
print strlen($nome_completo) . '<br>';
print substr($nome_completo, 5, 3) . '<br>';
print str_replace('a', 'e', $nome_completo) . '<br>';

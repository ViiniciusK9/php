<?php

require_once './classes/Veiculo.php';

$rm = new ReflectionMethod('Automovel', 'setPlaca');

print "{$rm->getName()}<br>";

print $rm->isPrivate() ? "É privado<br>" : "Não é privado<br>";

print $rm->isStatic() ? "É estático<br>" : "Não é estático<br>";

print $rm->isFinal() ? "É final<br>" : "Não é final<br>";
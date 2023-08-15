<?php

require_once './classes/Veiculo.php';

$rp = new ReflectionProperty('Automovel', 'placa');

print "{$rp->getName()}<br>";

print $rp->isPrivate() ? "É privado<br>" : "Não é privado<br>";

print $rp->isStatic() ? "É estático<br>" : "Não é estático<br>";

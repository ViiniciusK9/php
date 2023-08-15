<?php

// se der erro o codigo não para de executar (provavelmente vai dar erro onde chama alguma função)
//include 'quadrado.php';

// se der erro na hora de importar codigo para de executar aqui
//require 'quadrado.php';

// importa uma unica vez mesmo chamando diversas vezes dentro do projeto
require_once 'quadrado.php';
require_once 'quadrado.php';
require_once 'quadrado.php';
require_once 'quadrado.php';

var_dump(quadrado(5));
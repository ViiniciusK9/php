<?php

$dir = opendir('C:\xampp\htdocs\php\topicos_especiais_oo');

while ($arquivo = readdir($dir))
{
    print "{$arquivo}<br>";
}

closedir($dir);
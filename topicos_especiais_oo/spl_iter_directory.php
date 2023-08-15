<?php

foreach (new DirectoryIterator('C:\xampp\htdocs\php\topicos_especiais_oo') as $file)
{
    print "{$file}<br>";
    print "Nome: {$file->getFileName()}<br>";
    print "Extensão: {$file->getExtension()}<br>";
    print "Tamanho: {$file->getSize()}<br>";
    print "<br><br>";
}
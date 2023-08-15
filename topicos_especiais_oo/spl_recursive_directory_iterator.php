<?php

$path = 'C:\xampp\htdocs\php';

foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS)) as $item)
{
    print "Nome: {$item->getFileName()}<br><br><br>";

}
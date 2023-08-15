<?php

$file = new SplFileInfo('spl_file_object.php');

print "File Name: {$file->getFileName()}<br>";
print "Extension: {$file->getExtension()}<br>";

$file2 = new SplFileObject('novo.txt', 'w');

$bytes = $file2->fwrite('Olá Mundo!');

print "Bytes: {$bytes}<br>";

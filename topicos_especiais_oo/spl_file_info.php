<?php

$file = new SplFileInfo('spl_file_info.php');

print "File Name: {$file->getFileName()}<br>";
print "Extension: {$file->getExtension()}<br>";
print "Size: {$file->getSize()}<br>";
print "Type: {$file->getType()}<br>";
print "Is Writable: {$file->isWritable()}<br>";

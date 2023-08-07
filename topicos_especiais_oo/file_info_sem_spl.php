<?php

class MeuArquivo
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getContents()
    {
        return file_get_contents($this->path);
    }

    public function getExtension()
    {
        return pathinfo($this->path, PATHINFO_EXTENSION);
    }

    public function getFileName()
    {
        return basename($this->path);
    }

    public function getSize()
    {
        return filesize($this->path);
    }
}

echo "<pre>";

$file = new MeuArquivo('file_info_sem_spl.php');
print "File Name: {$file->getFileName()} <br>";
print "Extension: {$file->getExtension()} <br>";
print "Contents: {$file->getContents()} <br>";
print "Size: {$file->getSize()} <br>";

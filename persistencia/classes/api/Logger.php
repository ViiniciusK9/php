<?php
abstract class Logger
{
    protected $filepath;

    public function __construct($filepath)
    {
        $this->filepath = $filepath;
        //file_put_contents($filepath, '');
    }

    abstract function write($message);
}
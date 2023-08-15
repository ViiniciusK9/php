<?php

class LoggerTXT extends Logger
{
    public function write($message)
    {
        $text = date('Y-m-d H:i:s') . " : {$message} \n";

        $handler = fopen($this->filepath, 'a');
        fwrite($handler, $text);
        fclose($handler);
    }
}
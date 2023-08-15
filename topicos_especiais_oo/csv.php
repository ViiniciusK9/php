<?php

require_once 'classes/CSVParser.php';

$csv = new CSVParser('./clientess.csv', ';');

try
{
    $csv->parse();
    print '<pre>';
    
    while ($row = $csv->fetch()) {
        var_dump($row);
    }
}
catch (Exception $e)
{
    print $e->getMessage();
}




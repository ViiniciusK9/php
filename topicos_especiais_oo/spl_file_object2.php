<?php

$file = new SplFileObject('spl_file_object2.php');

//while (!$file->eof())
//{
    //print "Linha: {$file->fgets()}";
//}

foreach ($file as $linha => $conteudo)
{
    print "Linha {$linha}: {$conteudo} <br>";
}
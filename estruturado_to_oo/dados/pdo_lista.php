<?php

try
{
    $conn = new PDO('pgsql:dbname=livro;user=postgres;password=admin;host=localhost');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $conn->query("SELECT codigo, nome FROM famosos");
       
    if ($result) 
    {
        foreach ($result as $row)
        {
            print "{$row['codigo']} - {$row['nome']}<br>";
        }
    }

    $conn = null;
}
catch (PDOExeption $e)
{
    print "Deu ruim<br><br> {$e}";
}

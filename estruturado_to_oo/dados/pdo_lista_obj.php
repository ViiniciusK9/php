<?php

try
{
    // postgres
    $conn = new PDO('pgsql:dbname=livro;user=postgres;password=admin;host=localhost');
   
    //mysql
    //$conn = new PDO('mysql:host=localhost;port=3306;dbname=livro', 'red', 'admin');
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $conn->query("SELECT codigo, nome FROM famosos");
    echo "<pre>";
    if ($result) 
    {
        //mesma coisa
        //while ($row = $result->fetch(PDO::FETCH_OBJ))
        while ($row = $result->fetchObject())
        {
            print_r($row);
        }
    }

    $conn = null;
}
catch (PDOExeption $e)
{
    print "Deu ruim<br><br> {$e}";
}

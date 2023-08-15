<?php

try
{
    $conn = new PDO('pgsql:dbname=livro;user=postgres;password=admin;host=localhost');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /*
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (1, 'Drake');");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (2, 'Brad Pitt');");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (3, 'Katy Perry');");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (4, 'Lana Del Rey');");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (5, 'Vin Diesel');");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (6, 'Marilyn Monroe');");
    $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (7, 'Gigi Hadid');");
    */
     
    $conn = null;
}
catch (PDOExeption $e)
{
    print "Deu ruim<br><br> {$e}";
}

<?php

class Cidade
{
    public static function all()
    {
        $conn = new PDO('pgsql:dbname=livro;user=postgres;password=admin;host=localhost');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $result = $conn->query("SELECT * FROM cidade");
        return $result->fetchAll();
    }

}




?>
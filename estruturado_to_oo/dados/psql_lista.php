<?php

$conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');


$result = pg_query($conn, "SELECT codigo, nome FROM public.famosos;");

echo '<pre>';
if ($result) 
{
    while ($row = pg_fetch_assoc($result))
    {
        print_r($row);
    }
}

pg_close($conn);

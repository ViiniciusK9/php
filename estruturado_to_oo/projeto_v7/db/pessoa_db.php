<?php

function get_people($id)
{
    $conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');

    $result = pg_query($conn, "SELECT * FROM pessoa WHERE id = '{$id}'");

    pg_close($conn);

    return pg_fetch_assoc($result);
}

function delete_people($id)
{
    $conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');

    $result = pg_query($conn, "DELETE FROM pessoa WHERE id = '{$id}'");

    pg_close($conn);
    return $result;
}

function insert_people($people)
{
    $conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');

    $sql = "INSERT INTO pessoa( id, nome, endereco, bairro, telefone, email, id_cidade) 
                            VALUES ('{$people['id']}', 
                                    '{$people['nome']}', 
                                    '{$people['endereco']}', 
                                    '{$people['bairro']}', 
                                    '{$people['telefone']}', 
                                    '{$people['email']}', 
                                    '{$people['id_cidade']}');";

    $result = pg_query($conn, $sql);
    pg_close($conn);
    return $result;
}

function update_people($people)
{
    $conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');

    $sql = "UPDATE pessoa SET   nome      = '{$people['nome']}', 
                                endereco  = '{$people['endereco']}', 
                                bairro    = '{$people['bairro']}', 
                                telefone  = '{$people['telefone']}', 
                                email     = '{$people['email']}', 
                                id_cidade = '{$people['id_cidade']}' WHERE id = '{$people['id']}';";

    $result = pg_query($conn, $sql);
    pg_close($conn);
    return $result;
}

function list_peoples()
{
    $conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');

    $result = pg_query($conn, "SELECT * FROM pessoa ORDER BY id");

    pg_close($conn);

    return pg_fetch_all($result);
}

function get_next_id()
{
    $conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');
    
    $result = pg_query($conn, "SELECT max(id) as next FROM pessoa;");
    
    $next = (int) pg_fetch_assoc($result)['next'] + 1;
    
    pg_close($conn);
    
    return $next;
}

?>
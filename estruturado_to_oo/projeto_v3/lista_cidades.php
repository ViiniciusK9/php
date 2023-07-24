<?php

function lista_combo_cidades($id = '')
{
    $conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');

    $result = pg_query($conn, "SELECT id, nome FROM cidade;");

    $output = '';

    if ($result) {
        while ($row = pg_fetch_assoc($result))
        {
            if ($id == $row['id'])
            {
                $output .= "<option selected='selected' value='{$row['id']}'>{$row['nome']}</option>";
            }
            else 
            {
                $output .= "<option value='{$row['id']}'>{$row['nome']}</option>";
            }
        }

    }

    pg_close($conn);
    return $output;
}
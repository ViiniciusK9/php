<?php

function lista_pessoas_tb()
{
    $conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');

    $result = pg_query($conn, "SELECT id, nome, endereco, bairro, telefone FROM pessoa;");

    $output = '';

    if ($result) {
        while ($row = pg_fetch_assoc($result))
        {
            $output .= "<tr>
                            <tb></tb>
                            <tb></tb>
                            <tb>{$row['id']}</tb>
                            <tb>{$row['nome']}</tb>
                            <tb>{$row['endereco']}</tb>
                            <tb>{$row['bairro']}</tb>
                            <tb>{$row['telefone']}</tb>
                        </tr>";
        }

    }

    pg_close($conn);
    return $output;
}
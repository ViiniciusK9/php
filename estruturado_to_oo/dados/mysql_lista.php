<?php

$conn = mysqli_connect('localhost', 'red', 'admin', 'livro');

$query = 'SELECT nome, codigo FROM famosos;';

$result = mysqli_query($conn, $query);
echo '<pre>';
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}

mysqli_close($conn);

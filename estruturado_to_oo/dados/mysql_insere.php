<?php

$conn = mysqli_connect('localhost', 'red', 'admin', 'livro');

/*
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (1, 'Drake');");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (2, 'Brad Pitt');");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (3, 'Katy Perry');");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (4, 'Lana Del Rey');");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (5, 'Vin Diesel');");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (6, 'Marilyn Monroe');");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (7, 'Gigi Hadid');");
*/

mysqli_close($conn);

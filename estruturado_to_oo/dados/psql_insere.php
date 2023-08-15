<?php

$conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');

/*
pg_query($conn, "INSERT INTO public.famosos (codigo, nome) VALUES (1, 'Drake');");
pg_query($conn, "INSERT INTO public.famosos (codigo, nome) VALUES (2, 'Brad Pitt');");
pg_query($conn, "INSERT INTO public.famosos (codigo, nome) VALUES (3, 'Katy Perry');");
pg_query($conn, "INSERT INTO public.famosos (codigo, nome) VALUES (4, 'Lana Del Rey');");
pg_query($conn, "INSERT INTO public.famosos (codigo, nome) VALUES (5, 'Vin Diesel');");
pg_query($conn, "INSERT INTO public.famosos (codigo, nome) VALUES (6, 'Marilyn Monroe');");
pg_query($conn, "INSERT INTO public.famosos (codigo, nome) VALUES (7, 'Gigi Hadid');");
*/

pg_close($conn);

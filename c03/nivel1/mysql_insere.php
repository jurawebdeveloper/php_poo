<?php
//$conn = mysqli_connect('127.0.0.1', 'root', 'mysql', 'livro');
$conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
mysqli_query($conn, "CREATE TABLE famosos (codigo INT, nome VARCHAR(70))");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (2, 'John Lennon')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (3, 'Mahatma Gandhi')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (4, 'Ayrton Senna')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (5, 'Charlie Chaplin')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (6, 'Anita Garibaldi')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (7, 'Mário Quintana')");
// fecha a conexão
mysqli_close($conn);
?>
<?php
//conecta PostgreSql

    try{
        $conn = new PDO('pgsql:dbname=livro; user=postgres; password=1234; host=localhost');
        $conn->exec("DELETE FROM famosos");
        $conn->exec("INSERT INTO famosos VALUES (1, 'Érico Veríssimo')");
        $conn->exec("INSERT INTO famosos VALUES (1, 'John Lenon')");
        $conn->exec("INSERT INTO famosos VALUES (1, 'Mahatma Ghandi')");
        $conn = null;
    }
    catch(PDOExeption $e) {
        print "Erro!:"."\n";
    }    
?>
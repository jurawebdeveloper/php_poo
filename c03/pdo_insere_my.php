<?php
//conecta MySql
    try{
        $conn = new PDO('mysql: host=localhost; port=3306; dbname=livro','root','');
        //$conn->exec("CREATE TABLE famosos (codigo INT, nome VARCHAR(70))");
        $conn->exec("DELETE FROM famosos");
        $conn->exec("INSERT INTO famosos VALUES (1, 'Airton Senna')");
        $conn->exec("INSERT INTO famosos VALUES (1, 'Anita Garibaldi')");
        $conn->exec("INSERT INTO famosos VALUES (1, 'Mário Quintana')");
        $conn = null;
    }
    catch(PDOExeption $e) {
        print "Erro!:"."\n";
    }

    
?>
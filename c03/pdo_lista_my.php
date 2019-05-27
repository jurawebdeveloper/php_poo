<?php
//conecta PostgreSql


try{
    $conn=new PDO('mysql: host = localhost; port=3306; dbname=livro','root','');
    $result = $conn->query("SELECT codigo, nome FROM famosos");
   // echo '<pre>'; print_r($result); exit;
    
    if($result) {
     /*   
        foreach($result as $row){
            echo $row['codigo'].'-'.$row['nome']."<br>";
        }
*/

        print 'Linhas como Objeto<br><br>';
        while($row = $result->fetch(PDO::FETCH_OBJ)) {
            echo $row->codigo . '-'. $row->nome.'<br>';
        }
    }

    $conn=null;
}
catch(PDOExeption $e) {
    print "Erro!:".$e->getMessage()."<br>";
}

    
?>
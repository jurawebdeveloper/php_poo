<?php
$dados = $_GET;
if (!empty($dados['id'])) {
    //$dsn = "host=localhost port=5432 dbname=livro user=postgres password=1234";
    //$conn = pg_connect($dsn);
    $conn = mysqli_connect('127.0.0.1','root','','livro');
    $sql = "DELETE FROM pessoa WHERE id = '{$dados['id']}'";
    //$result = pg_query($conn, $sql);
    $result = mysqli_query($conn, $sql);
    if ($result) {
        print 'Registro excluído com sucesso';
    }
    else {
        print pg_last_error($conn);
    }
    //pg_close($conn);
    mysqli_close($conn);
}
?>
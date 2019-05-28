
<?php
$dados = $_POST;

//EXEMPLO POSTGRES

/*
$dados = $_POST;
$dsn = "host=localhost port=5432 dbname=livro user=postgres password=1234";
$conn = pg_connect($dsn);
$result = pg_query($conn, "SELECT max(id) as next FROM pessoa");
$next = (int) pg_fetch_assoc($result)['next'] +1;
$sql = "INSERT INTO pessoa (id,
nome,
endereco,
bairro,
telefone,
email,
id_cidade)
VALUES ( '{$next}',
'{$dados['nome']}',
'{$dados['endereco']}',
'{$dados['bairro']}',
'{$dados['telefone']}',
'{$dados['email']}',
'{$dados['id_cidade']}'
)";
$result = pg_query($conn, $sql);
if ($result) {
print 'Registro inserido com sucesso';
}
else {
print pg_last_error($conn);
}
pg_close($conn);
*/

// EXEMPLO COM MYSQL


$dsn = "'127.0.0.1', 'root', '', 'livro'";
$conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
$result = mysqli_query($conn, "SELECT max(id) as next FROM pessoa");
$ultimoId = mysqli_fetch_assoc($result)['next'];
$next = $ultimoId +1;
//echo '<pre>'; print_r($next);
$sql = "INSERT INTO pessoa (id,
    nome,
    endereco,
    bairro,
    telefone,
    email,
    id_cidade)
    VALUES ( '{$next}',
    '{$dados['nome']}',
    '{$dados['endereco']}',
    '{$dados['bairro']}',
    '{$dados['telefone']}',
    '{$dados['email']}',
    '{$dados['id_cidade']}'
    )";

$result = mysqli_query($conn, $sql);
if ($result) {
print 'Registro inserido com sucesso';
}
else {
print mysqli_last_error($conn);
}
mysqli_close($conn);



?>
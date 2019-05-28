<?php
function lista_combo_cidades($id = null) {
    $output = '';
  /*  
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
// define a consulta que será realizada
$query = 'SELECT id, nome FROM cidade';
// envia consulta ao banco de dados
$result = mysqli_query($conn, $query);
if ($result) {
// percorre resultados da pesquisa
while ($row = mysqli_fetch_assoc($result)) {
$output .= "<option value = '{$row['id']}'> {$row['nome']}</option>";
}
}
mysqli_close($conn); // fecha a conexão
return $output;
  
*/
    
    //EXEMPLO DO LIVRO
    $dsn = "host=localhost port=5432 dbname=livro user=postgres password=1234";
    $conn = pg_connect($dsn);
    $query = 'SELECT id, nome FROM cidade';
    $result = pg_query($conn, $query);
    if ($result) {
        while ($row = pg_fetch_assoc($result)) {
        $check = ($row['id'] == $id) ? 'selected=1' : '';
        $output .= "<option $check value='{$row['id']}'> {$row['nome']} </option>\n";
        }
    }
    pg_close($conn);
    return $output;
    
}
?>

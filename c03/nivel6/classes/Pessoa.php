<?php
class Pessoa {
    private static $conn;
    public static function getConnection(){
        if(empty(self::conn)){
            $conexao = parse_ini_file('config/livro.ini');
            $host = $conexao['host'];
            $name = $conexao['name'];
            $user = $conexao['user'];
            $pass = $conexao['pass'];

            self::conn = new PDO('mysql: host = {$host}; dbname = {$name}',$user, $pass);
            //PDO('mysql:host=localhost;dbname=livro', $username, $password)
            self::conn->setAttribute(PDO:::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        return self::$conn;
    }
    public function save($pessoa);
    $conn = self::getConnection();

    if(empty($pessoa['id'])){
        $result = $conn->query("SELECT max(id) as last_id FROM pessoa");
        $row = $result->fetch();
        $pessoa['id'] = (int) $row['last_id'] + 1;

        $sql = "INSERT INTO pessoa VALUES
        (
        :id, :nome, :endereco,
        :bairro, :telefone,
        :email, :id_cidade)";
    }else{
        $sql = "UPDATE pessoa SET
        nome = :nome,
        endereco = :endereco,
        bairro = :bairro,
        telefone = :telefone,
        email = :email,
        id_cidade = :id_cidade,
        WHERE id = :id";
    }
    $result = $conn->prepare($sql);
    $result->execute([
        ':id'=>$pessoa['id'], 
        ':nome'=>$pessoa['nome'], 
        ':endereco'=>$pessoa['endereco'], 
        ':bairro'=>$pessoa['bairro'], 
        ':telefone'=>$pessoa['telefone'], 
        ':email'=>$pessoa['email'], 
        ':id_cidade'=>$pessoa['id_cidade'] 

        ])
}
